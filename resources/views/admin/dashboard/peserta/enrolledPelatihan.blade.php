@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-4">
            <select name="" class="form-control">
                <option value="">Kelompok Keahlian</option>
            </select>
        </div>
        <div class="col-md-8">
            <input type="text" name="" class="form-control" placeholder="Cari Pelatihan">
        </div>  
    </div>
    <div class="row mt-3">
        @foreach($data as $dt)
        <div class="col-12 col-xl-3">
            <div class="card" style="height: 15rem;">
                <img class="card-img-top" src="{{asset('/images/pelatihan/'.$dt->gambar)}}" alt="Card image cap">
                <div class="card-body text-center">
                    <h5>{{$dt->judul}}</h5>
                    <a href="{{route('peserta.pelatihan.katalog.detail', ['idPelatihan' => $dt->id])}}" class="btn btn-sm btn-primary text-center">Lihat Selengkapnya...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection