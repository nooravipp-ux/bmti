<?php

namespace App\Http\Controllers;

use App\Models\JenisKegiatan;
use Illuminate\Http\Request;
use App\Models\ProgramKegiatan;
use Illuminate\Support\Facades\DB;

class ProgramKegiatanController extends Controller
{
    public function index()
    {
        $data = DB::table('m_program_kegiatan')
                ->select('m_program_kegiatan.*', 'm_jenis_kegiatan.nama_jenis_kegiatan')
                ->join('m_jenis_kegiatan', 'm_jenis_kegiatan.id','=', 'm_program_kegiatan.jenis_kegiatan_id')
                ->get();

        return view('admin.ProgramKegiatan.index', compact('data'));
    }
    public function create()
    {   
        $data = JenisKegiatan::all();
        return view('admin.ProgramKegiatan.create', compact('data'));
    }
    public function store(Request $request)
    {
        $data = ProgramKegiatan::create([
            'jenis_kegiatan_id' => $request->jenis_kegiatan_id,
            'nama_kegiatan' => $request->nama_kegiatan,
            'kode_kegiatan' => $request->kode_kegiatan,
        ]);

        return redirect('/admin/program-kegiatan');
    }
    public function edit($id)
    {
        $data = ProgramKegiatan::find($id);
        return view('admin.ProgramKegiatan.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = ProgramKegiatan::find($id);
        $data->update([
            'jenis_kegiatan_id' => $request->jenis_kegiatan_id,
            'nama_kegiatan' => $request->nama_jenis_kegiatan,
            'kode_kegiatan' => $request->kode_kegiatan,
        ]);

        return redirect('/admin/program-kegiatan');
    }
    public function delete($id)
    {
        $data = ProgramKegiatan::find($id);
        $data->delete();

        return redirect('/admin/program-kegiatan');
    }
}
