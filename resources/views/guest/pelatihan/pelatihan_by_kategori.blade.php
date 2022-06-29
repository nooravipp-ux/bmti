@extends('layouts.master_front')

@section('content')
<div class="model-3d">
    <div class="container">
        <div class="row">
            <div class="text-tpgm">
                <div class="col-sm-12 col-xl-12">
                    <p>{{$pelatihan->judul}}</p>
                </div>
            </div>
        </div>

        <div class="d-flex">
            <div class="col-xl-1 img-account">
                <img src="/images/account.png" width="30px" height="30px" />
            </div>
            <div class="col-xl-3 account">
                <span>By {{$pelatihan->author}}
                    <p>Last Update Sept 15, 2021</p>
                </span>
            </div>

            <div class="col-xl-1 img-rating">
                <img src="{{asset('guest/assets/images/rating.png')}}" width="40px" height="40px" />
            </div>
            <div class="col-xl-3 rating">
                <span>1.296</span>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-5">
                <div class="image-tpgm">
                    <img src="{{asset('/images/pelatihan/'.$pelatihan->gambar)}}" width="500px" height="350px" />
                </div>
            </div>

            <div class="col-12 col-xl-6">
                <div class="line-left">
                    <div class="course">
                        <p>Course & Topics</p>
                        <hr />
                        <p>Course Home</p>
                        <hr />
                        <a>Expand All</a>

                        <input class="check-course" type="checkbox" id="check-course" />
                        <label for="check-course"></label>
                        @foreach($topiks as $tp)
                        <div>
                            <input class="pengantar" type="checkbox" />
                            <span> &nbsp;{{$tp->judul}}</span>
                            <hr />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row text-center">
        <div class="col-3 col-xl-1">
            <div class="shared-3d">
                <a href="">
                    <img src="{{asset('guest/assets/images/share-shared.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d">
                <a href="">
                    <img src="{{asset('guest/assets/images/fb-shared.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d">
                <a href="">
                    <img src="{{asset('guest/assets/images/twitter-shared.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d">
                <a href="">
                    <img src="{{asset('guest/assets/images/google.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d">
                <a href="">
                    <img src="{{asset('guest/assets/images/reddit-shared.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d">
                <a href="">
                    <img src="{{asset('guest/assets/images/pinterest-shared.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d">
                <a href="">
                    <img src="{{asset('guest/assets/images/email-shared.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xl-12 col-xl-6">
            <div class="content">
                <a>Collapse All</a>
                <input class="collapse-all" type="checkbox" id="collapse-all" />
                <label class="collapse-all" for="collapse-all"></label>

                <h2>Course Content</h2>
                @foreach($topiks as $tp)
                <div class="bg-box shadow bg-white rounded mt-1">
                    <input type="checkbox" />
                    <span>{{$tp->judul}}</span>
                </div>

                <span class="collapse-1">
                    <a>Collapse</a>
                    <input class="collapse-1" type="checkbox" id="collapse-1" />
                    <label for="collapse-1"></label>
                    @foreach($konten as $kt)
                    @if($kt->topik_id == $tp->id)
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <img src="{{asset('guest/assets/images/lesson.png')}}" width="30px" height="30px" />
                        <p>{{$kt->judul}}</p>
                    </div>
                    @endif
                    @endforeach

                    @foreach($topikQuiz as $tq)
                    @if($tq->topik_id == $tp->id)
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <img src="{{asset('guest/assets/images/tes-awal.png')}}" width="30px" height="30px" />
                        <p>{{$tq->judul}}</p>
                    </div>
                    @endif
                    @endforeach
                </span>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center mt-4 text-center">
        <div class="col-sm-6 col-xl-1 img-rating-2">
            <img src="{{asset('guest/assets/images/rating.png')}}" width="40px" height="40px" />
        </div>

        <div class="col-sm-6 col-xl-4 rating-2 text-dark">
            <span>1.296</span>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href="">
                    <img src="{{asset('guest/assets/images/share-shared.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href="">
                    <img src="{{asset('guest/assets/images/fb-shared.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href="">
                    <img src="{{asset('guest/assets/images/twitter-shared.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href="">
                    <img src="{{asset('guest/assets/images/google.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href="">
                    <img src="{{asset('guest/assets/images/reddit-shared.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href="">
                    <img src="{{asset('guest/assets/images/pinterest-shared.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href="">
                    <img src="{{asset('guest/assets/images/email-shared.png')}}" width="70px" height="25px" />
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-5">
        @foreach($data as $data)
        <div class="col-sm-12 col-xl-4">
            <div class="card-pel shadow">
                <p class="title-free">Free</p>
                <img class="card-img-top" src="{{asset('/images/pelatihan/'.$data->gambar)}}" alt="Card image cap"
                    width="360px" height="200px" />
                <div class="card-body text-center">
                    <h2 class="card-text">{{$data->judul}}</h2>
                    <a href="{{route('pelatihan.detail', ['id'=>$data->id])}}"><button type="button"
                            class="btn-pel btn-primary">Lihat Selengkapnya...</button></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection