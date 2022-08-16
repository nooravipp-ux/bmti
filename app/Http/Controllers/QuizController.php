<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\KelompokKeahlian;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function index()
    {
        $kelKeahlian = KelompokKeahlian::all();
        $data = DB::table('t_quiz')->select('t_quiz.*','m_kelompok_keahlian.nama as kelompok_keahlian')
                ->join('m_kelompok_keahlian','m_kelompok_keahlian.id', '=','t_quiz.kelompok_keahlian_id')
                ->get();
        return view('admin.quiz.index', compact('data','kelKeahlian'));
       
    }
    public function create()
    {
        return view('admin.quiz.create');
    }
    public function store(Request $request)
    {
        $data = Quiz::create([
            'judul' => $request->judul,
            'kelompok_keahlian_id' => $request->kelompok_keahlian_id,
            'tipe_quiz' => $request->tipe_quiz,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/admin/quiz');
    }
    public function edit($id)
    {
        $data = Quiz::find($id);
        $pertanyaan = Pertanyaan::where('quiz_id', $id)->get();
        return view('admin.quiz.edit', compact('data','pertanyaan'));
    }
    public function update(Request $request, $id)
    {
        $data = Quiz::find($id);
        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tipe_quiz' => $request->tipe_quiz,
            'durasi' => $request->durasi,
        ]);

        return redirect('/admin/quiz');
    }
    public function delete($id)
    {
        $data = Quiz::find($id);
        $data->delete();

        return redirect('/admin/quiz');
    
    }
}