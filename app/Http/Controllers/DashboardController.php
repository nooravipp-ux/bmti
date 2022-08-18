<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role_id == 5) {
            $id_peserta = DB::table('m_peserta')->where('user_id', auth()->user()->id)->first();

            $data = DB::table('t_kursus_peserta')
                ->select('t_kursus.id', 'm_kelompok_keahlian.kode', 'm_kelompok_keahlian.nama', 't_kursus.judul')
                ->join('t_kursus', 't_kursus.id', '=', 't_kursus_peserta.kursus_id')
                ->join('m_kelompok_keahlian', 'm_kelompok_keahlian.id', '=', 't_kursus.kelompok_keahlian_id')
                ->where('t_kursus_peserta.peserta_id', $id_peserta->id)
                ->where('t_kursus_peserta.status', 0)->get();

            return view('admin.dashboard.base', compact('data', 'id_peserta'));
        }
        if (auth()->user()->role_id == 4) {
            return view('admin.dashboard.base');
        }

        return view('admin.dashboard.base');


    }
}
