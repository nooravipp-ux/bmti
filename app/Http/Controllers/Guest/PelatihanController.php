<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kursus;
use Illuminate\Support\Facades\DB;

class PelatihanController extends Controller
{
    public function index()
    {
        $data = DB::table('t_kursus')->select('t_kursus.*', 'm_kategori_kursus.kode')
            ->join('m_kategori_kursus', 'm_kategori_kursus.id', '=', 't_kursus.kategori_kursus_id')
            ->get();

        return view('guest.pelatihan.index', compact('data'));
    }

    public function getAllPelatihanByKategori($id)
    {

        $pelatihan = DB::table('t_kursus')->select('t_kursus.*', 'm_kategori_kursus.kode')
            ->join('m_kategori_kursus', 'm_kategori_kursus.id', '=', 't_kursus.kategori_kursus_id')
            ->first();

        return view('guest.pelatihan.pelatihan_by_kategori', compact('pelatihan'));
    }
}
