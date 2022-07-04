<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $data = Peserta::all();
        $id_peserta = DB::table('m_peserta')->where('user_id', auth()->user()->id)->first();
        
        return view('admin.dashboard.base', compact('data', 'id_peserta'));
    }
}
