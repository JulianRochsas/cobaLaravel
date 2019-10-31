<?php

namespace App\Http\Controllers;

use App\Jurusan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.index', ['jurusan'=>$jurusan]);
    }

    public function create()
    {
        return view('jurusan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required'
        ]);

        Jurusan::create($request->all());
        return redirect('/jurusan')->with('status','data berhasil ditambahkan');
    }

    public function edit(Jurusan $jurusan)
    {
        return view('jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, Jurusan $jurusan)
    {
        Jurusan::where('id', $jurusan->id)->update([
            'nama_jurusan' => $request->nama_jurusan
        ]);
        return redirect('/jurusan')->with('status', 'Data berhasil diubah');
    }

    public function destroy(Jurusan $jurusan)
    {
        Jurusan::destroy($jurusan->id);
        return redirect('/jurusan')->with('status', 'Data berhasil dihapus');
    }


}
