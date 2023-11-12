<?php

namespace App\Http\Controllers;
use App\Models\Konten;
// use App\Models\TipeKonten;
use App\Models\User;
// use Error;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
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
        $user = auth()->user();
        return view('profil.profil', compact('user'));
    }
    public function updatep(Request $request)
    {
        $user = auth()->user();
        // dd($request);
        $user->name = $request['name'];
        $user->email = $request['email'];
        // Cek apakah ada file foto_profil dalam permintaan
        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');

            // Validasi hanya satu file yang diizinkan
            if ($file->isValid()) {
                $filename = $file->getClientOriginalName();
                $file->move(public_path('img/foto_profile'), $filename);
                $user->foto_profil = $filename;
            } else {
                return redirect()->back()->withErrors(['foto_profil' => 'Inputan Anda salah. Hanya satu file gambar yang diizinkan.']);
            }
        }
        $user->save();
        Session::flash('success', 'Profil berhasil diubah.');

        return redirect()->route('profil');
    }
    public function updatePw(Request $request)
    {
        $this->validate($request, [
                'password_lama' => 'required|string',
                'password' => 'required|string|min:6|confirmed'
            ]);

        $user = auth()->user();
        $password_lama = $request->input('password_lama');

        if (Hash::check($password_lama, $user->password)) {
            if ($password_lama == $request->input('password')) {
                return redirect()->back()->with('error', 'Maaf, password yang Anda masukkan sama!');
            }
            else {
                $user->password = Hash::make($request->input('password'));
                $user->save();
                return redirect()->back()->with('success', 'Password Anda berhasil diperbarui!');
            }
        }

        return redirect()->back()->with('error', 'Tolong masukkan password lama Anda dengan benar!');

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
