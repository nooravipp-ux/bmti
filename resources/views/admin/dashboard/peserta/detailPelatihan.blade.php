@extends('layouts.master')
@section('custom-css')
<style>
    .list-group li {
        border-left: none;
        border-right: none;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row mt-3 mb-3">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex">
                            <div class="p-2 bd-highlight">
                                <h2>{{$pelatihan->judul}}</h2>

                            </div>
                            <div class="ms-auto p-2 bd-highlight">
                               @if($checkEnroll == false)
                                <a class="btn btn-lg btn-primary" href="{{route('peserta.pelatihan.enroll', [$pelatihan->id])}}">Daftar Pelatihan</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            <img src="{{asset('/images/pelatihan/'.$pelatihan->gambar)}}" width="600px" height="350px" />
                        </div>
                        <div class="col-xl-4">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Kursus & Topik</b></li>
                            </ul>
                            @foreach($topiks as $tp)
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-start">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="dapatDiUlang" value="1" class="form-check-input">
                                        {{$tp->judul}}
                                    </label>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">Detail Konten Pelatihan</h5>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($topiks as $tp)
                        <div class="bg-box shadow bg-white rounded mt-1">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-start">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="dapatDiUlang" value="1" class="form-check-input">
                                        <a href="{{route('pembelajaran.topik',['id' => $pelatihan->id, 'topikId' => $tp->id])}}" style="text-decoration: none;"><span>{{$tp->judul}}</span></a>
                                    </label>
                                </li>
                            </ul>
                            @foreach($konten as $kt)
                            @if($kt->topik_id == $tp->id)
                            <div class="margin-left: 10px;">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-start" style="padding-left: 30px">
                                        <label class="form-check-label">
                                            <img src="{{asset('guest/assets/images/lesson.png')}}" width="15px" height="15px" />
                                            <a href="{{route('pembelajaran.konten',['id' => $pelatihan->id, 'topikId' => $tp->id, 'kontenId' => $kt->id])}}" style="text-decoration: none;"><span>{{$kt->judul}}</span></a>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            @endif
                            @endforeach
                            @foreach($topikQuiz as $tq)
                            @if($tq->topik_id == $tp->id)
                            <div>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-start" style="padding-left: 30px">
                                        <label class="form-check-label">
                                            <img src="{{asset('guest/assets/images/tes-awal.png')}}" width="15px" height="15px" />
                                            <a href="{{route('pembelajaran.quiz',['id' => $pelatihan->id, 'topikId' => $tq->topik_id, 'quizId' => $tq->quiz_id])}}" style="text-decoration: none;"><span>{{$tq->judul}}</span></a>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection