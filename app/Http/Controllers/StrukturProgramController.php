<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StrukturProgramController extends Controller
{
    public function index($pelatihanId){
        $data = DB::table('t_struktur_program')->where('kursus_id', $pelatihanId)->orderBy('kategori', 'desc')->get();
        return view('admin.kursus.struktur_program', compact('data', 'pelatihanId'));
    }

    public function simpan(Request $request){

        DB::table('t_struktur_program')->insert([
            'kursus_id' => $request->pelatihanId,
            'kategori' => $request->kategori,
            'materi' => $request->materi,
            'jam_pelajaran' => $request->jam_pelajaran
        ]);

        return redirect()->back();
    }
}
 