<?php

namespace App\Http\Controllers;

use App\Models\JenisKursus;
use Illuminate\Http\Request;

class JenisKursusController extends Controller
{
    public function index()
    {
        $data = JenisKursus::all();
        return view('admin.jenisKursus.index', compact('data'));
    }
    public function create()
    {
        return view('admin.jenisKursus.create');
    }
    public function store(Request $request)
    {
        $data = jenisKursus::create([
            'nama' => $request->nama,
        ]);
        return redirect('/admin/jenis-kursus');
    }
    public function edit($id)
    {
        $data = jenisKursus::find($id);
        return view('admin.jenisKursus.edit', compact(['data']));
    }
    public function update(Request $request, $id)
    {
        $data = jenisKursus::find($id);
        $data->update([
            'nama' => $request->nama
        ]);

        return redirect('/admin/jenis-kursus');
    }
    public function delete($id)
    {
        $data = jenisKursus::find($id);
        $data->delete();

        return redirect('/admin/jenis-kursus');
    
    }
}