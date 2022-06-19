<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerusahaanMitra;

class BerandaController extends Controller
{
    public function getData()
    {
        $dataMitra = PerusahaanMitra::orderBy('urutan', 'DESC')->get();
        return view('guest.beranda', compact('dataMitra'));
    }

    public function getTestimoni()
    {
    }
}
