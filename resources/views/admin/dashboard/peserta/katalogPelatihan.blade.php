@extends('layouts.master')

@section('content')
<style>
@media only screen and (min-width: 400px) and (max-width: 767px) {
    .marginCard {
        margin-top: 20px;
    }
}
</style>

<div class="container">
    <div class="row mt-3" style="font-family:glory;">
        <div class="col-md-4">
            <select name="" class="form-control">
                <option value="">Kelompok Keahlian</option>
            </select>
        </div>
        <div class="col-md-8 marginCard">
            <input type="text" name="" class="form-control" placeholder="Cari Pelatihan">
        </div>
    </div>
    <div class="row mt-3">
        @foreach($data as $dt)
        <div class="col-12 col-xl-3">
            <div class="card" style="height: 15rem; font-family:glory;">
                <img class="card-img-top" src="{{asset('/images/pelatihan/'.$dt->gambar)}}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4>{{$dt->judul}}</h4>
                    <a href="{{route('peserta.pelatihan.katalog.detail', ['idPelatihan' => $dt->id])}}"
                        class="btn btn-sm btn-primary text-center">Lihat Selengkapnya...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection