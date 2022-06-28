<?php

namespace App\Http\Controllers\Guest;

use App\Models\Visitor;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use App\Models\PerusahaanMitra;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function getData()
    {
        $dataMitra = PerusahaanMitra::orderBy('urutan', 'DESC')->get();
        $testimoni = Testimoni::all();
        $jumlahVisitor = Visitor::count();
        return view('guest.beranda', compact('dataMitra','testimoni','jumlahVisitor'));
    }

    public function getTestimoni()
    {
    }
}
