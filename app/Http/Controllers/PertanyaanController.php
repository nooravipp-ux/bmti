<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data = Pertanyaan::all();
        return view('admin.pertanyaan.index', compact('data'));
    }
    public function create()
    {
        $quiz = Quiz::all();
        return view('admin.pertanyaan.create', compact('quiz'));
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
            $image->move(public_path('public/image'), $imageName);
        }

        return redirect('/pertanyaan');
    }
    public function edit($id)
    {
        $data = Pertanyaan::find($id);
        $quiz = Quiz::all();
        return view('admin.pertanyaan.edit', compact(['data', 'quiz']));
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
            $image->move(public_path('public/image'), $imageName);
        }

        return redirect('/pertanyaan');
    }
    public function delete($id)
    {
        $data = Pertanyaan::find($id);
        $data->delete();

        return redirect('/pertanyaan');
    
    }
}