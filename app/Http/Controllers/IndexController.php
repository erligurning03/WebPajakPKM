<?php

namespace App\Http\Controllers;
use App\Models\Konten;
// use App\Models\TipeKonten;
use App\Models\User;
// use Error;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listKonten = Konten::with('KomentarKonten')
            ->with('LikeKonten')
            ->with('ShareKonten')
            ->orderBy('id', 'DESC')
            ->get();
        // dd($listKonten->toArray());
        return view('beranda.beranda', compact('listKonten'));
    }
    public function editp(Request $request)
    {
        return view('profil.profil');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
