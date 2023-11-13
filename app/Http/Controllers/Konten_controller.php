<?php

namespace App\Http\Controllers;

use App\Models\Komentar_konten;
use App\Models\Konten;
use App\Models\Like_konten;
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
    public function indexBerita()
    {
        $listKonten = Konten::with('KomentarKonten')
            ->where('tipe_konten_id', '1')
            ->with('LikeKonten')
            ->with('ShareKonten')
            ->orderBy('created_at', 'DESC')
            ->get();
        // dd($listKonten->toArray());
        return view('beranda.list_berita', compact('listKonten'));
    }
    public function showBerita($id)
    {
        $listKonten = Konten::with('KomentarKonten')
            ->where('tipe_konten_id', '1')
            ->where('id', $id)
            ->with('LikeKonten')
            ->with('ShareKonten')
            ->orderBy('created_at', 'DESC')
            ->get();

        $komentar = Komentar_konten::with('userKomen')
            ->where('konten_id', $id)
            ->get();

        $sessionId = auth()->id();
        $liked = Like_konten::where('konten_id', $id)
            ->where('disukai_oleh', $sessionId)
            ->exists();
        // dd($liked);
        // dd($sessionId);


        // dd($listKonten->toArray());
        return view('beranda.berita', compact('listKonten', 'komentar', 'liked', 'id'));
    }

    public function dislikeBerita($id)
    {
        // Find the model instance based on the given criteria
        $Like = Like_konten::where('konten_id', $id)
            ->where('disukai_oleh', auth()->id())
            ->first();

        // Check if the model exists before attempting to delete
        if ($Like) {
            // Delete the model
            $Like->delete();
        }

        return redirect("/index/berita/{$id}");
    }

    public function likeBerita($id)
    {

        $Like = new Like_konten([
            'konten_id' => $id,
            'disukai_oleh' => auth()->id(),
        ]);

        $Like-> save();
        return redirect("/index/berita/{$id}");
    }



    public function komenBerita(Request $request, $id)
    {
        // dd($request->input('isi_komentar'));
        $sessionId = auth()->id();
        // dd($sessionId);
        // Create a new Komentar instance
        $komentar = new Komentar_konten([
            'konten_id' => $id,
            'dikomentari_oleh' => $sessionId,
            'isi_komentar' => $request->input('isi_komentar'),
        ]);
        // dd($komentar);

        // Save the Komentar to the database
        $komentar->save();
        return redirect("/index/berita/{$id}")->with('success', 'komentar berhasil ditambahkan');
    }

    // //Podcast
    public function indexPodcast()
    {
        $listKonten = Konten::with('KomentarKonten')
            ->where('tipe_konten_id', '2')
            ->with('LikeKonten')
            ->with('ShareKonten')
            ->orderBy('created_at', 'DESC')
            ->get();
        // dd($listKonten->toArray());
        return view('beranda.list_podcast', compact('listKonten'));
    }
    public function showPodcast($id)
    {
        $listKonten = Konten::with('KomentarKonten')
            ->where('tipe_konten_id', '2')
            ->where('id', $id)
            ->with('LikeKonten')
            ->with('ShareKonten')
            ->orderBy('created_at', 'DESC')
            ->get();
        // dd($listKonten->toArray());
        return view('beranda.podcast', compact('listKonten', 'id'));
    }
    // //Tontonan
    public function indexTontonan()
    {
        $listKonten = Konten::with('KomentarKonten')
            ->where('tipe_konten_id', '3')
            ->with('LikeKonten')
            ->with('ShareKonten')
            ->orderBy('created_at', 'DESC')
            ->get();
        // dd($listKonten->toArray());
        return view('beranda.list_tontonan', compact('listKonten'));
    }
    public function showTontonan($id)
    {
        $listKonten = Konten::with('KomentarKonten')
            ->where('tipe_konten_id', '3')
            ->where('id', $id)
            ->with('LikeKonten')
            ->with('ShareKonten')
            ->orderBy('created_at', 'DESC')
            ->get();
        // dd($listKonten->toArray());
        return view('beranda.tontonan', compact('listKonten', 'id'));
    }

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

        return view('admin.beranda.tambah_konten', $datas);
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
            ->where('id')
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

        $datas['dataKonten'] = Konten::where('id', $id)->first();

        return view('admin.beranda.edit_konten', $datas);
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
                    'tipe_konten' => 'required|in:' . join(',', $tipeKontenList->toArray()),
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

            $validateRequest['diupload_oleh'] = auth()->user()->id;

            if (!$this->isGoogleDrivePath($validateRequest['cover_konten'])) {
                return back()->withInput();
            }
            if (!$this->isGoogleDrivePath($validateRequest['url_konten'])) {
                return back()->withInput();
            }

            $validateRequest['cover_konten'] = $this->getIdFormGoogleDriveUrl($validateRequest['cover_konten']);
            $validateRequest['url_konten'] = $this->getIdFormGoogleDriveUrl($validateRequest['url_konten']);

            $findKonten->cover_konten = $validateRequest['cover_konten'];
            $findKonten->judul_konten = $validateRequest['judul_konten'];
            $findKonten->url_konten = $validateRequest['url_konten'];
            $findKonten->deskripsi_konten = $validateRequest['deskripsi_konten'];
            $findKonten->tipe_konten_id = $validateRequest['tipe_konten'];
            $findKonten->diupload_oleh = $validateRequest['diupload_oleh'];
            $findKonten->save();

            return redirect()->to('konten');
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
        return redirect('konten')->with('success', 'konten has been deleted');
    }

    public function getIdFormGoogleDriveUrl($path)
    {
        $id = explode('/', $path)[5];
        $urlPathGDrive = "https://drive.google.com/uc?id=";

        return $urlPathGDrive . $id;
    }

    public function isGoogleDrivePath($path)
    {
        if (isset(explode('/', $path)[5])) {
            return true;
        } else {
            return false;
        }
    }
}
