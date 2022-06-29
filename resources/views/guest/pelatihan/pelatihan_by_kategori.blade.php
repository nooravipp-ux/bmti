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
                <image src="/images/account.png" width="30px" height="30px" />
            </div>
            <div class="col-xl-3 account">
                <span>By Joko Suseno<p>Last Update Sept 15, 2021</p></span>
            </div>

            <div class="col-xl-1 img-rating">
                <image src="{{asset('guest/assets/images/rating.png')}}" width="40px" height="40px" />
            </div>
            <div class="col-xl-3 rating">
                <span>1.296</span>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-5">
                <div class="image-tpgm">
                    <image src="{{asset('/images/pelatihan/'.$pelatihan->gambar)}}" width="500px" height="350px" />
                </div>
            </div>

            <div class="col-12 col-xl-6">
                <div class="line-left">
                    <div class="course">
                        <p>Course & Topics</p>
                        <hr/>
                        <p>Course Home</p>
                        <hr/>
                        <a>Expand All</a>

                        <input class="check-course" type="checkbox" id="check-course" />
                        <label for="check-course"></label>

                        <div>
                            <input class="pengantar" type="checkbox" />
                            <span> &nbsp;Pengantar</span>
                            <hr/>
                        </div>
                        <div>
                            <input class="pengantar" type="checkbox" />
                            <span> &nbsp;Tes Awal</span>
                            <hr/>
                        </div>
                        <div>
                            <input class="pengantar" type="checkbox" />
                            <span> &nbsp;Pendahuluan</span>
                            <hr/>
                        </div>
                        <div>
                            <input class="pengantar" type="checkbox" />
                            <span> &nbsp;Kegiatan Pembelajaran 1</span>
                            <hr/>
                        </div>
                        <div>
                            <input class="pengantar" type="checkbox" />
                            <span> &nbsp;Kegiatan Pembelajaran 2</span>
                            <hr/>
                        </div>
                        <div>
                            <input class="pengantar" type="checkbox" />
                            <span> &nbsp;Refleksi</span>
                            <hr/>
                        </div>
                        <div>
                            <p>Tes Akhir dan Umpan Balik</p>
                            <hr/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row text-center">
        <div class="col-xl-1">
            <div class="shared-3d">
                <a href=""><image src="{{asset('guest/assets/images/share-shared.png')}}" width="70px" height="25px"/></a>
            </div>
        </div>

        <div class="col-xl-1">
            <div class="shared-3d">
                <a href=""><image src="{{asset('guest/assets/images/fb-shared.png')}}" width="70px" height="25px"/></a>
            </div>
        </div>

        <div class="col-xl-1">
            <div class="shared-3d">
                <a href=""><image src="{{asset('guest/assets/images/twitter-shared.png')}}" width="70px" height="25px"/></a>
            </div>
        </div>

        <div class="col-xl-1">
            <div class="shared-3d">
                <a href=""><image src="{{asset('guest/assets/images/google.png')}}" width="70px" height="25px"/></a>
            </div>
        </div>

        <div class="col-xl-1">
            <div class="shared-3d">
                <a href=""><image src="{{asset('guest/assets/images/reddit-shared.png')}}" width="70px" height="25px"/></a>
            </div>
        </div>

        <div class="col-xl-1">
            <div class="shared-3d">
                <a href=""><image src="{{asset('guest/assets/images/pinterest-shared.png')}}" width="70px" height="25px"/></a>
            </div>
        </div>

        <div class="col-xl-1">
            <div class="shared-3d">
                <a href=""><image src="{{asset('guest/assets/images/email-shared.png')}}" width="70px" height="25px"/></a>
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
                <div class="bg-box shadow bg-white rounded mt-1">
                    <input type="checkbox" />
                    <span>Pengantar</span>
                </div>

                <div class="bg-box shadow bg-white rounded mt-1">
                    <input type="checkbox" />
                    <span>Tes Awal</span>
                </div>

                <span class="collapse-1">
                    <a>Collapse</a>
                    <input class="collapse-1" type="checkbox" id="collapse-1"/>
                    <label for="collapse-1"></label>
                            
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <image src="{{asset('guest/assets/images/lesson.png')}}" width="30px" height="30px"/>
                        <p>Lesson Content</p>
                    </div>
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <image src="{{asset('guest/assets/images/tes-awal.png')}}" width="30px" height="30px"/>
                        <p>Tes Awal</p>
                    </div>
                </span>

                <div class="bg-box shadow bg-white rounded mt-1">
                    <input type="checkbox" />
                    <span>Pengantar</span>
                </div>

                <div class="bg-box shadow bg-white rounded mt-1">
                    <input type="checkbox" />
                    <span>Kegiatan Pembelajaran 1</span>
                </div>
                <span class="collapse-2">
                    <a>Collapse</a>
                    <input class="collapse-2" type="checkbox" id="collapse-2"/>
                    <label for="collapse-2"></label>
        
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <image src="{{asset('guest/assets/images/lesson.png')}}" width="30px" height="30px"/>
                        <p>Lesson Content</p>
                    </div>
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <input class="check-box" type="checkbox"/>
                        <span>&nbsp; Mengukur dan Menggunakan Alat Ukur</span>
                    </div>
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <input class="check-box" type="checkbox" />
                        <span>&nbsp; Membaca dan Mempersiapkan Gambar</span>
                    </div>
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <image src="{{asset('guest/assets/images/tes-awal.png')}}" width="30px" height="30px" />
                        <p>Tes Awal</p>
                    </div>
                </span>

                <div class="bg-box shadow bg-white rounded mt-1">
                    <input type="checkbox" />
                    <span>Kegiatan Pembelajaran 2</span>
                </div>

                <span class="collapse-3">
                    <a>Collapse</a>
                    <input class="collapse-3" type="checkbox" id="collapse-3"/>
                    <label for="collapse-3"></label>
                                
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <image src="{{asset('guest/assets/images/lesson.png')}}" width="30px" height="30px"/>
                        <p>Lesson Content</p>
                    </div>
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <input class="check-box" type="checkbox"/>
                        <span>&nbsp; Menyiapkan Penggambaran 3D</span>
                    </div>
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <input class="check-box" type="checkbox" />
                        <span>&nbsp; Membuat dan Mengedit Model 3D</span>
                    </div>
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <input class="check-box" type="checkbox" />
                        <span>&nbsp; Memahami Prosedur Luaran (Output) dari Model 3D</span>
                    </div>

                    <div class="bg-box shadow bg-white rounded mt-1">
                        <image src="{{asset('guest/assets/images/tes-awal.png')}}" width="30px" height="30px" />
                        <p>Tes Awal</p>
                    </div>
                </span>

                <div class="bg-box shadow bg-white rounded mt-1">
                    <input type="checkbox" />
                    <span>Refleksi</span>
                </div>

                <span class="collapse-4">
                    <a>Collapse</a>
                    <input class="collapse-4" type="checkbox" id="collapse-4"/>
                    <label for="collapse-4"></label>
                            
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <image src="{{asset('guest/assets/images/lesson.png')}}" width="30px" height="30px"/>
                        <p>Lesson Content</p>
                    </div>
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <image src="{{asset('guest/assets/images/tes-awal.png')}}" width="30px" height="30px"/>
                        <p>Tes Awal</p>
                    </div>
                </span>

                <div class="bg-box shadow bg-white rounded mt-1">
                    <input type="checkbox" /><span>Tes Akhir dan Umpan Balik</span>
                </div>

                <span class="collapse-5">
                    <a>Collapse</a>
                    <input class="collapse-5" type="checkbox" id="collapse-5"/>
                    <label for="collapse-5"></label>
                            
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <image src="{{asset('guest/assets/images/lesson.png')}}" width="30px" height="30px"/>
                        <p>Lesson Content</p>
                    </div>
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <image src="{{asset('guest/assets/images/umpan-balik.png')}}" width="30px" height="30px"/>
                        <p>Umpan Balik</p>
                    </div>
                    <div class="bg-box shadow bg-white rounded mt-1">
                        <image src="{{asset('guest/assets/images/tes-awal.png')}}" width="30px" height="30px"/>
                        <p>Tes Awal</p>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center mt-4 text-center">
        <div class="col-sm-6 col-xl-1 img-rating-2">
            <image src="{{asset('guest/assets/images/rating.png')}}" width="40px" height="40px" />
        </div>

        <div class="col-sm-6 col-xl-4 rating-2 text-dark">
            <span>1.296</span>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href=""><image src="{{asset('guest/assets/images/share-shared.png')}}" width="70px" height="25px"/></a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href=""><image src="{{asset('guest/assets/images/fb-shared.png')}}" width="70px" height="25px"/></a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href=""><image src="{{asset('guest/assets/images/twitter-shared.png')}}" width="70px" height="25px"/></a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href=""><image src="{{asset('guest/assets/images/google.png')}}" width="70px" height="25px"/></a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href=""><image src="{{asset('guest/assets/images/reddit-shared.png')}}" width="70px" height="25px"/></a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href=""><image src="{{asset('guest/assets/images/pinterest-shared.png')}}" width="70px" height="25px"/></a>
            </div>
        </div>

        <div class="col-3 col-xl-1">
            <div class="shared-3d-2">
                <a href=""><image src="{{asset('guest/assets/images/email-shared.png')}}" width="70px" height="25px"/></a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-xl-4">
            <div class="card-pel shadow">
                <p class="title-free">Free</p>
                <image class="card-img-top" src="{{asset('guest/assets/images/pelatihan-1.png')}}" alt="Card image cap" width="360px" height="200px" />
                <div class="card-body text-center">
                    <h2 class="card-text">TPGM-Membuat Model 3D dengan CAD</h2>
                    <a href=""><button type="button" class="btn-pel btn-primary">Lihat Selengkapnya...</button></a>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card-pel shadow">
                <p class="title-free">Free</p>
                <image class="card-img-top" src="/images/pelatihan-2.png" alt="Card image cap" width="360px" height="200px" />
                <div class="card-body text-center">
                    <h2 class="card-text">PLTS- Memasang Pembangkit Listrik Tenaga Surya (PLTS) Type Rooftop</h2>
                    <a href="#"><button type="button" class="btn-pel btn-primary">Lihat Selengkapnya...</button></a>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card-margin card-pel shadow">
                <image class="card-img-top" src="/images/pelatihan-3.png" alt="Card image cap" width="360px" height="200px" />
                <div class="card-body text-center">
                    <h2 class="card-text">BING-Classroom Language-1</h2>
                    <a href="#"><button type="button" class="btn-pel btn-primary">Lihat Selengkapnya...</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection