<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\JenisKursus;
use Illuminate\Http\Request;
use App\Models\KategoriKursus;
use Illuminate\Support\Facades\DB;

class KursusController extends Controller
{
    public function index(){
        $data = DB::table('t_kursus')->select('t_kursus.*','m_jenis_kursus.nama as jenis_kursus','m_kategori_kursus.nama as kategori_kursus')
                ->join('m_jenis_kursus', 'm_jenis_kursus.id', '=', 't_kursus.jenis_kursus_id')
                ->join('m_kategori_kursus', 'm_kategori_kursus.id', '=', 't_kursus.kategori_kursus_id')
                ->get();
        return view('admin.kursus.index', compact('data'));
    }
    
    public function create()
    {
        $jenis_kursus = JenisKursus::all();
        $kategori_kursus = KategoriKursus::all();
        dd($kategori_kursus);
        return view('admin.kursus.create', compact(['jenis_kursus', 'kategori_kursus']));
    }

    public function createTopik($kursusId){
        $kursus = DB::table('t_kursus')->where('id', $kursusId)->first();
        $topik = DB::table('t_topik')->where('kursus_id', $kursusId)->get();
        
        return view('admin.kursus.topik', compact('kursus','topik'));
    }

    public function store(Request $request)
    {
        $image = $request->file('gambar');
        $imageName = $image->getClientOriginalName();
        $data = Kursus::create([
            'jenis_kursus_id' => 1,
            'kategori_kursus_id' => $request->kategori_kursus_id,
            'author_id' => auth()->user()->name,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName
        ]);
        if($request->file('gambar')) {
            $image->move(public_path('public/Image'), $imageName);
        }

        return $this->createTopik($data->id);
    }
    public function edit($id)
    {
        $data = Kursus::find($id);
        $jenis_kursus = JenisKursus::all();
        $kategori_kursus = KategoriKursus::all();
        return view('admin.kursus.edit', compact(['data', 'jenis_kursus', 'kategori_kursus']));
    }
    public function update(Request $request, $id)
    {
        $image = $request->file('gambar');
        $imageName = $image->getClientOriginalName();
        $data = Kursus::find($id);
        $data->update([
            'jenis_kursus_id' => $request->jenis_kursus_id,
            'kategori_kursus_id' => $request->kategori_kursus_id,
            'author_id' => $request->author_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName
        ]);
        if($request->file('gambar')) {
            $image->move(public_path('public/Image'), $imageName);
        }

        return redirect('/admin/kursus');
    }
    public function delete($id)
    {
        $data = Kursus::find($id);
        $data->delete();

        return redirect('/admin/kursus');
    
    }
}