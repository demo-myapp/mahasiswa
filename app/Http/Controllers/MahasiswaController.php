<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('home', compact('mahasiswa'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Mahasiswa::create([
            'nama_mahasiswa' => $request->nama,
            'jurusan' => $request->jurusan,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jk
        ]);

        return redirect(route('mahasiswa.index'));
    }

    public function report(Request $request)
    {
        if ($request->gb == 1) {
            $mahasiswa = Mahasiswa::all()->groupBy('usia');
            $title = 'Usia';
        } elseif ($request->gb == 2) {
            $mahasiswa = Mahasiswa::all()->groupBy('jenis_kelamin');
            $title = 'Jenis Kelamin';
        } else {
            $mahasiswa = Mahasiswa::all()->groupBy('jurusan');
            $title = 'Jurusan';
        }
        return view('report', compact('mahasiswa', 'title'));
    }
}
