<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kursus;
use App\Models\Topik;
use Illuminate\Support\Facades\DB;

class PelatihanController extends Controller
{
    public function index()
    {
        $data = DB::table('t_kursus')->select('t_kursus.*', 'm_kelompok_keahlian.nama as kategori_kursus')
            ->join('m_kelompok_keahlian', 'm_kelompok_keahlian.id', '=', 't_kursus.kelompok_keahlian_id')
            ->get();

        return view('guest.pelatihan.index', compact('data'));
    }

    public function getDetailPelatihan($id)
    {
        $data = DB::table('t_kursus')->select('t_kursus.*', 'm_kelompok_keahlian.nama as kategori_kursus')
            ->join('m_kelompok_keahlian', 'm_kelompok_keahlian.id', '=', 't_kursus.kelompok_keahlian_id')
            ->get();

        $pelatihan = DB::table('t_kursus')
            ->select('t_kursus.*', 'm_kelompok_keahlian.nama as kategori_kursus')
            ->join('m_kelompok_keahlian', 'm_kelompok_keahlian.id', '=', 't_kursus.kelompok_keahlian_id')
            ->first();

        $topiks  = Topik::where('kursus_id', $id)->get();
        $pelatihan = Kursus::find($id)->first();

        $topikQuiz = DB::table('t_topik')->select('t_quiz.id as quiz_id', 't_quiz.judul', 't_topik_quiz.topik_id')
            ->join('t_topik_quiz', 't_topik_quiz.topik_id', '=', 't_topik.id')
            ->join('t_quiz', 't_quiz.id', '=', 't_topik_quiz.quiz_id')
            ->where('t_topik.kursus_id', $id)
            ->get();
        $konten = DB::table('t_topik')
            ->join('t_topik_konten', 't_topik.id', '=', 't_topik_konten.topik_id')
            ->join('t_konten', 't_konten.id', '=', 't_topik_konten.konten_id')
            ->where('kursus_id', $id)
            ->get();

        return view('guest.pelatihan.pelatihan_by_kategori', compact('pelatihan','topiks', 'pelatihan', 'topikQuiz', 'konten','data'));
    }
}
