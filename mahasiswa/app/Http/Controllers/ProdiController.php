<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdiController extends Controller
{
    public function index(){
        $prodi = Prodi::all();
        return view('prodi.index', compact('prodi'));
    }

    public function create(){
        $prodi = Prodi::all();
        return view('prodi.create', compact('prodi'));
    }

    public function store(Request $request){
        $prodi = Prodi::create([
            'nama_prodi' => $request->nama_prodi,
            'deskripsi' => $request->deskripsi,
    ]);
    if ('prodi') {
            return redirect()
                ->route('prodi.index')
                ->with('success', 'Data program studi berhasil dibuat!');
        } else {
            return redirect()
                ->route('prodi.create')
                ->with('error', 'Data program studi gagal dibuat!');
        }
    }

    public function edit(Prodi $prodi){
        $prodi = Prodi::get();
        return view('prodi.edit', compact('prodi'));
    }

    public function update(Request $request, Prodi $prodi){
        $validator = Validator::make($request->all(), [
            'nama_prodi' => 'required',
            'deskripsi' => 'required',
            
        ]);
        $prodi->update($validator->validate());

        if ($prodi) {
            return to_route('prodi.index')->with('success', 'Data program studi berhasil diubah!');
        } else {
            return to_route('prodi.edit', $prodi)->with('error', 'Data program studi gagal diubah!');
        }
    }
    
    public function destroy(Prodi $prodi){
        $deleted = $prodi->delete();

        if ($deleted) {
            return to_route('prodi.index')->with('success', 'Data program studi berhasil dihapus!');
        } else {
            return to_route('prodi.index')->with('error', 'Data program studi gagal dihapus!');
        }
    }
}
