<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerusahaanMitra;
use App\Models\Testimoni;

class BerandaController extends Controller
{
    public function getData()
    {
        $dataMitra = PerusahaanMitra::orderBy('urutan', 'DESC')->get();
        $testimoni = Testimoni::all();
        return view('guest.beranda', compact('dataMitra','testimoni'));
    }

    public function getTestimoni()
    {
    }
}
