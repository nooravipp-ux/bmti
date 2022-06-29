<?php

namespace App\Http\Controllers;

use App\Models\KategoriKursus;
use App\Models\KelompokKeahlian;
use App\Models\Quiz;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function index()
    {
        $kelKeahlian = KelompokKeahlian::all();
        $data = DB::table('m_pertanyaan')->select('m_pertanyaan.*', 'm_kelompok_keahlian.id as kelompok_keahlian_id', 'm_kelompok_keahlian.nama')
                ->join('m_kelompok_keahlian', 'm_kelompok_keahlian.id', '=', 'm_pertanyaan.kelompok_keahlian_id')
                ->get();
        return view('admin.pertanyaan.index', compact('data','kelKeahlian'));
    }
    public function create()
    {
        $kelKeahlian = KelompokKeahlian::all();
        return view('admin.pertanyaan.create', compact('kelKeahlian'));
    }
    public function store(Request $request)
    {

        $image = $request->file('gambar');
        $imageName = "";
        if($image) {
            $imageName = $image->getClientOriginalName();
        }

        $data = Pertanyaan::create([
            'quiz_id' => $request->quiz_id,
            'pertanyaan' => $request->pertanyaan,
            'gambar' => $imageName,
            'pilihan_a' => $request->pilihan_a,
            'pilihan_b' => $request->pilihan_b,
            'pilihan_c' => $request->pilihan_c,
            'pilihan_d' => $request->pilihan_d,
            'jawaban' => $request->jawaban
        ]);
        if($request->file('gambar')) {
            $image->move(public_path('public/images'), $imageName);
        }

        return redirect()->route('quiz.edit', [$request->quiz_id]);
    }
    public function edit($id)
    {
        $data = Pertanyaan::find($id);
        $kelKeahlian = KelompokKeahlian::all();
        return view('admin.pertanyaan.edit', compact(['data', 'kelKeahlian']));
    }
    public function update(Request $request, $id)
    {
        $image = $request->file('gambar');
        $imageName = "";
        if($image) {
            $imageName = $image->getClientOriginalName();
        }

        $data = Pertanyaan::find($id);
        $data->update([
            'kelompok_keahlian_id' => $request->kelompok_keahlian_id,
            'pertanyaan' => $request->pertanyaan,
            'gambar' => $imageName,
            'pilihan_a' => $request->pilihan_a,
            'pilihan_b' => $request->pilihan_b,
            'pilihan_c' => $request->pilihan_c,
            'pilihan_d' => $request->pilihan_d,
            'jawaban' => $request->jawaban
        ]);
        if($request->file('gambar')) {
            $image->move(public_path('public/images'), $imageName);
        }

        return redirect('/admin/pertanyaan');
    }
    public function delete($id)
    {
        $data = Pertanyaan::find($id);
        $data->delete();

        return redirect('/admin/pertanyaan');
    
    }
}