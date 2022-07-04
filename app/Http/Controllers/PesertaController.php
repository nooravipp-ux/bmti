<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index(){
        $data = Peserta::all();

        return view('admin.peserta.index', compact('data'));
    }
    // create store edit update delete
    public function create(){
        return view('admin.peserta.create');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nuptk' => 'required|numeric|digits:16',
            'nik' => 'required|numeric|digits:16',
            'nama_depan' => 'required',
            'nama_belakang' => 'required|string|min:8',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|before:today',
            'alamat' => 'required',
            'desa_kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota_kab' => 'required',
            'provinsi' => 'required',
            'email' => 'required|string|email|unique:users',
            'no_telepon' => 'required|numeric|digits_between:9,13'

        ]);

        $data = Peserta::create([
            'nuptk' => $request->nuptk,
            'nik' => $request->nik,
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'desa_kelurahan' => $request->desa_kelurahan,
            'kecamatan' => $request->kecamatan,
            'kota_kab' => $request->kota_kab,
            'provinsi' => $request->provinsi,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon
        ]);

        return redirect('/admin/peserta')->with('message', 'Data Berhasil Disimpan');
    }
    public function edit($id){
        $data = Peserta::find($id);
        return view('admin.peserta.edit', compact(['data']));
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nuptk' => 'required|numeric|digits:16',
            'nik' => 'required|numeric|digits:16',
            'nama_depan' => 'required',
            'nama_belakang' => 'required|string|min:8',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'desa_kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota_kab' => 'required',
            'provinsi' => 'required',
            'email' => 'required|string|email|unique:users',
            'no_telepon' => 'required|numeric'

        ]);
        $data = Peserta::find($id);
        $data->update([
            'nuptk' => $request->nuptk,
            'nik' => $request->nik,
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'desa_kelurahan' => $request->desa_kelurahan,
            'kecamatan' => $request->kecamatan,
            'kota_kab' => $request->kota_kab,
            'provinsi' => $request->provinsi,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon
        ]);

        return redirect('/admin/peserta')->with('message', 'Data Berhasil Diubah');
    }
    public function delete($id){
        $data = Peserta::find($id);
        $data->delete();

        return redirect('/admin/peserta')->with('message', 'Data Berhasil Dihapus');
    }
}