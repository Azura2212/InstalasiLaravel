<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
   
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswa,nim',
            'jurusan' => 'required',
        ]);

        Mahasiswa::create($request->all());

        return redirect('/simpan')->with('success', 'Data berhasil disimpan!');
    }
    public function daftar()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswa'));
    }

    public function simpan(Request $request)
{
    Mahasiswa::create($request->all());
    return view('form', ['message' => 'Data mahasiswa berhasil disimpan!']);
}
}
