<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BidangKeahlian;

class BidangKeahlianController extends Controller
{
    public function index(){
        $bidangKeahlian = BidangKeahlian::all();

        return view('admin.BidangKeahlian.index', compact('bidangKeahlian'));
    }
    // create store edit update delete
    public function create(){
        return view('admin.BidangKeahlian.create');
    }
    public function store(Request $request){
        $bidangKeahlian = BidangKeahlian::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/admin/bidang-keahlian');
    }
    public function edit($id){
        $bidangKeahlian = BidangKeahlian::find($id);
        return view('admin.BidangKeahlian.edit', compact(['bidangKeahlian']));
    }
    public function update(Request $request, $id){
        $bidangKeahlian = BidangKeahlian::find($id);
        $bidangKeahlian->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/admin/bidang-keahlian');
    }
    public function delete($id){
        $bidangKeahlian = BidangKeahlian::find($id);
        $bidangKeahlian->delete();

        return redirect('/admin/bidang-keahlian');
    }
}
