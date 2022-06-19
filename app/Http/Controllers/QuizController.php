<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $data = Quiz::all();
        return view('admin.quiz.index', compact('data'));
       
    }
    public function create()
    {
        return view('admin.quiz.create');
    }
    public function store(Request $request)
    {
        $data = Quiz::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'durasi' => $request->durasi,
        ]);

        return redirect('/quiz');
    }
    public function edit($id)
    {
        $data = Quiz::find($id);
        return view('admin.quiz.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Quiz::find($id);
        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'durasi' => $request->durasi,
        ]);

        return redirect('/quiz');
    }
    public function delete($id)
    {
        $data = Quiz::find($id);
        $data->delete();

        return redirect('/quiz');
    
    }
}