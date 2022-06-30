<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kompetensi;
use App\Models\Keahlian;

class GaleriaController extends Controller
{
    public function getKategoriKompetensi(){
        $data = Kompetensi::all();
        return view('guest.galeria.index', compact('data'));
    }

    public function getAllKeahlianByKategori($kategori_id){

        $kompetensi = Kompetensi::where('id', $kategori_id)->first();
        $data = Keahlian::where('id_kompetensi', $kategori_id)->get();

        return view('guest.galeria.keahlian', compact('data','kompetensi'));
    }
}
