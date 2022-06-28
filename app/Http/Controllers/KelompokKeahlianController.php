<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramKeahlian;
use App\Models\KelompokKeahlian;

class KelompokKeahlianController extends Controller
{
    public function index(){
        $kelompokKeahlian = KelompokKeahlian::all();
        return view('admin.KelompokKeahlian.index', compact('kelompokKeahlian'));
    }
    
    // create store edit update delete
    public function create(){
        $programKeahlian = ProgramKeahlian::all();
        return view('admin.KelompokKeahlian.create', compact('programKeahlian'));
    }
    public function store(Request $request){
        $kelompokKeahlian = KelompokKeahlian::create([
            'program_keahlian_id' => $request->program_keahlian_id,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/admin/kelompok-keahlian');
    }
    public function edit($id){
        $kelompokKeahlian = KelompokKeahlian::find($id);
        $programKeahlian = ProgramKeahlian::all();
        return view('admin.KelompokKeahlian.edit', compact('kelompokKeahlian','programKeahlian'));
    }
    public function update(Request $request, $id){
        $kelompokKeahlian = KelompokKeahlian::find($id);
        $kelompokKeahlian->update([
            'program_keahlian_id' => $request->program_keahlian_id,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/admin/kelompok-keahlian');
    }
    public function delete($id){
        $kelompokKeahlian = KelompokKeahlian::find($id);
        $kelompokKeahlian->delete();

        return redirect('/admin/kelompok-keahlian');
    }
}
