<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\TipeKonten;
use App\Models\User;
use Error;
use Illuminate\Http\Request;

class Konten_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listKonten = Konten::with('KomentarKonten')
        ->with('TipeKonten')
        ->with('LikeKonten')
        ->with('ShareKonten')
        ->orderBy('created_at', 'DESC')
        ->get();
        // dd($listKonten->toArray());
        // $tipeKontenList=TipeKonten::all();
        return view('admin/beranda/list_konten', compact('listKonten'));
    }
    //berita
    // public function indexB()
    // {
    //     $listKonten = Konten::with('KomentarKonten')
    //         ->where('tipe_konten_id', '1')
    //         ->with('LikeKonten')
    //         ->with('ShareKonten')
    //         ->orderBy('created_at', 'DESC')
    //         ->get();
    //     // dd($listKonten->toArray());
    //     return view('beranda.list_berita', compact('listKonten'));
    // }
    // public function showB($id)
    // {
    //     $listKonten = Konten::with('KomentarKonten')
    //         ->where('tipe_konten_id', '1')
    //         ->where('id', $id)
    //         ->with('LikeKonten')
    //         ->with('ShareKonten')
    //         ->orderBy('created_at', 'DESC')
    //         ->get();
    //     // dd($listKonten->toArray());
    //     return view('beranda.berita', compact('listKonten', 'id'));
    // }

    // //Podcast
    // public function indexP()
    // {
    //     $listKonten = Konten::with('KomentarKonten')
    //         ->where('tipe_konten_id', '2')
    //         ->with('LikeKonten')
    //         ->with('ShareKonten')
    //         ->orderBy('created_at', 'DESC')
    //         ->get();
    //     // dd($listKonten->toArray());
    //     return view('beranda.list_podcast', compact('listKonten'));
    // }
    // public function showP($id)
    // {
    //     $listKonten = Konten::with('KomentarKonten')
    //         ->where('tipe_konten_id', '2')
    //         ->where('id', $id)
    //         ->with('LikeKonten')
    //         ->with('ShareKonten')
    //         ->orderBy('created_at', 'DESC')
    //         ->get();
    //     // dd($listKonten->toArray());
    //     return view('beranda.podcast', compact('listKonten', 'id'));
    // }
    // //Tontonan
    // public function indexT()
    // {
    //     $listKonten = Konten::with('KomentarKonten')
    //         ->where('tipe_konten_id', '3')
    //         ->with('LikeKonten')
    //         ->with('ShareKonten')
    //         ->orderBy('created_at', 'DESC')
    //         ->get();
    //     // dd($listKonten->toArray());
    //     return view('admin/beranda.list_konten', compact('listKonten'));
    // }
    // public function showT($id)
    // {
    //     $listKonten = Konten::with('KomentarKonten')
    //         ->where('tipe_konten_id', '3')
    //         ->where('id', $id)
    //         ->with('LikeKonten')
    //         ->with('ShareKonten')
    //         ->orderBy('created_at', 'DESC')
    //         ->get();
    //     // dd($listKonten->toArray());
    //     return view('beranda.tontonan', compact('listKonten', 'id'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datas = [
            'titlePage' => 'Tambah Data Konten',
            'jenisKonten' => TipeKonten::all(),
            'userKonten' => User::all()
        ];

        return view('admin.beranda.tambah_konten',$datas);
        // dd('ini adalah tampilan create function');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipeKontenList = TipeKonten::all();
        $tipeKontenList = $tipeKontenList->map(fn ($item) => $item->id);
        $userList = User::all();
        $userList = $userList->map(fn ($item) => $item->id);

        $validateRequest = $request->validate(
            [
                'cover_konten' => 'required',
                'judul_konten' => 'required',
                'url_konten' => 'required',
                'deskripsi_konten' => 'required',
                'tipe_konten' => 'required|in:' . join(',', $tipeKontenList->toArray())
            ],
            [
                'cover_konten.required' => 'Cover Konten Wajib Diisi',
                'judul_konten.required' => 'Judul Konten Wajib Diisi',
                'url_konten.required' => 'URL Konten Wajib Diisi',
                'deskripsi_konten.required' => 'Deskripsi Konten Wajib Diisi',
                'tipe_konten.required' => 'Tipe Konten Wajib Diisi',
                'tipe_konten.in' => 'Tipe Konten tidak valid',
            ]
        );

        if (!$this->isGoogleDrivePath($validateRequest['cover_konten'])) {
            return back()->withInput();
        }

        if (!$this->isGoogleDrivePath($validateRequest['url_konten'])) {
            return back()->withInput();
        }

        $validateRequest['cover_konten'] = $this->getIdFormGoogleDriveUrl($validateRequest['cover_konten']);
        $validateRequest['url_konten'] = $this->getIdFormGoogleDriveUrl($validateRequest['url_konten']);
        $validateRequest['tipe_konten_id'] = $validateRequest['tipe_konten'];
        unset($validateRequest['tipe_konten']);
        $validateRequest['diupload_oleh'] = auth()->user()->id;

        Konten::create($validateRequest);

        return redirect()->route('konten.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Konten $konten)
    {
        dd($konten->toArray());
        $findKonten = Konten::with('KomentarKonten')
            ->with('LikeKonten')
            ->with('ShareKonten')
            ->where('id', $id)
            ->orderBy('created_at', 'DESC')
            ->first();
        dd($findKonten->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datas = [
            'titlePage' => 'Ubah Data Konten',
            'jenisKonten' => TipeKonten::all(),
            'userKonten' => User::all()
        ];

        $datas['dataKonten'] = Konten::where('id',$id)->first();

        return view('admin.beranda.edit_konten',$datas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $findKonten = Konten::find($id);
        if ($findKonten) {
            $tipeKontenList = TipeKonten::all();
            $tipeKontenList = $tipeKontenList->map(fn ($item) => $item->id);
            $userList = User::all();
            $userList = $userList->map(fn ($item) => $item->id);

            $validateRequest = $request->validate(
                [
                    'cover_konten' => 'required',
                    'judul_konten' => 'required',
                    'url_konten' => 'required',
                    'deskripsi_konten' => 'required',
                    'tipe_konten_id' => 'required|in:' . join(',', $tipeKontenList->toArray()),
                    'diupload_oleh' => 'required||in:' . join(',', $userList->toArray()),
                ],
                [
                    'cover_konten.required' => 'Cover Konten Wajib Diisi',
                    'judul_konten.required' => 'Judul Konten Wajib Diisi',
                    'url_konten.required' => 'URL Konten Wajib Diisi',
                    'deskripsi_konten.required' => 'Deskripsi Konten Wajib Diisi',
                    'tipe_konten_id.required' => 'Tipe Konten Wajib Diisi',
                    'tipe_konten_id.in' => 'Tipe Konten tidak valid',
                    'diupload_oleh.required' => 'Diupload Oleh Wajib Diisi',
                    'diupload_oleh.in' => 'Diupload Oleh tidak valid'
                ]
            );

            $findKonten->cover_konten = $validateRequest['cover_konten'];
            $findKonten->judul_konten = $validateRequest['judul_konten'];
            $findKonten->url_konten = $validateRequest['url_konten'];
            $findKonten->deskripsi_konten = $validateRequest['deskripsi_konten'];
            $findKonten->tipe_konten_id = $validateRequest['tipe_konten_id'];
            $findKonten->diupload_oleh = $validateRequest['diupload_oleh'];
            $findKonten->save();
        } else {
            throw new Error('Gagal update data. Data tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $findKonten = Konten::find($id);
        $findKonten->delete();
        return redirect('konten')->with('success','konten has been deleted');
    }

    public function getIdFormGoogleDriveUrl($path) {
        $id = explode('/',$path)[5];
        $urlPathGDrive = "https://drive.google.com/uc?id=";

        return $urlPathGDrive.$id;
    }

    public function isGoogleDrivePath($path) {
        if (isset(explode('/',$path)[5])) {
            return true;
        } else {
            return false;
        }
    }
}
