<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramKeahlian;
use App\Models\BidangKeahlian;

class ProgramKeahlianController extends Controller
{
    public function index(){
        $programKeahlian = ProgramKeahlian::all();

        return view('admin.ProgramKeahlian.index', compact('programKeahlian'));
    }

    // create store edit update delete
    public function create(){
        $bidangKeahlian = BidangKeahlian::all();
        return view('admin.ProgramKeahlian.create', compact('bidangKeahlian'));
    }
    public function store(Request $request){
        $programKeahlian = ProgramKeahlian::create([
            'bidang_keahlian_id' => $request->bidang_keahlian_id,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/admin/program-keahlian');
    }
    public function edit($id){
        $programKeahlian = ProgramKeahlian::find($id);
        $bidangKeahlian = BidangKeahlian::all();
        return view('admin.ProgramKeahlian.edit', compact('programKeahlian','bidangKeahlian'));
    }
    public function update(Request $request, $id){
        $programKeahlian = ProgramKeahlian::find($id);
        $programKeahlian->update([
            'bidang_keahlian_id' => $request->bidang_keahlian_id,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/admin/program-keahlian');
    }
    public function delete($id){
        $programKeahlian = ProgramKeahlian::find($id);
        $programKeahlian->delete();

        return redirect('/admin/program-keahlian');
    }
}
