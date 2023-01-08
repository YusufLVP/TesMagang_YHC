<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::with('Prodi')->paginate();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create(){
        $mahasiswa = Mahasiswa::all();
        $prodi = Prodi::all();
        return view('mahasiswa.create', compact('mahasiswa','prodi'));
    }

    public function store(Request $request){
        $mahasiswa = Mahasiswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'prodi_id' => $request->prodi_id,
            'semester' => $request->semester,
            'tahun_angkatan' => $request->tahun_angkatan
    ]);
    if ('mahasiswa') {
            return redirect()
                ->route('mahasiswa.index')
                ->with('success', 'Data mahasiswa berhasil dibuat!');
        } else {
            return redirect()
                ->route('mahasiswa.create')
                ->with('error', 'Data mahasiswa gagal dibuat!');
        }
    }

    public function edit(Mahasiswa $mahasiswa){
        $prodi = Prodi::get();
        return view('mahasiswa.edit', compact('mahasiswa','prodi'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa){
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kelas' => 'required',
            'prodi_id' => 'required',
            'semester' => 'required',
            'tahun_angkatan' => 'required',
        ]);
        $mahasiswa->update($validator->validate());

        if ($mahasiswa) {
            return to_route('mahasiswa.index')->with('success', 'Data mahasiswa dengan nama '.$mahasiswa->nama.' berhasil diubah!');
        } else {
            return to_route('mahasiswa.edit', $mahasiswa)->with('error', 'Data mahasiswa dengan nama ' . $mahasiswa->nama . '  gagal diubah!');
        }
    }

    public function show(Mahasiswa $mahasiswa){
        return view('mahasiswa.detail', compact('mahasiswa'));
    }
    
    public function destroy(Mahasiswa $mahasiswa){
        $deleted = $mahasiswa->delete();

        if ($deleted) {
            return to_route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus!');
        } else {
            return to_route('mahasiswa.index')->with('error', 'Data mahasiswa gagal dihapus!');
        }
    }
}
