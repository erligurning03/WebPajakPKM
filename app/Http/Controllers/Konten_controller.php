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
            ->with('LikeKonten')
            ->with('ShareKonten')
            ->orderBy('created_at', 'DESC')
            ->get();
        dd($listKonten->toArray());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd('Ini view create function');
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

        Konten::create($validateRequest);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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
        dd('Ini edit function');
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
    }
}
