<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class SertifikatController extends Controller
{
    public function index(){
        return view('admin.sertifikat.index');
    }

    public function create(Request $request){

        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $data = DB::table('m_sertifikat')->insert([
            'kelompok_keahlian_id' => $request->kelompok_keahlian_id,
            'author' => auth()->user()->name,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName
        ]);
        if ($request->file('gambar')) {
            $image->move(public_path('images/pelatihan/'), $imageName);
        }

        return view('admin.sertifikat.create');
    }

    public function edit(){

    }

    public function update(){

    }
}
