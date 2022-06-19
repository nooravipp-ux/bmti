@extends('layouts.master_front')

@section('content')
<div class="teknik-permesinan">
    <div class="container">
        <div class="row">
            <div class="col-12 text-kompetensi order-1">
                <h1>{{$kompetensi->nama_kompetensi}}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-7 text-kompetensi mt-0 order-3 order-md-2">
                <p>{{$kompetensi->deskripsi}}</p>
            </div>

            <div class="col-12 col-md-11 col-xl-5 order-2 image-permesinan">
                <div class="image-teknik-permesinan d-flex justify-content-end">
                    <div class="p-1">
                        <image src="{{asset('guest/assets/images/perme.png')}}" width="290px" height="160px" />
                    </div>
                    <div class="p-1">
                        <image src="{{asset('guest/assets/images/maklumatplayanan2.png')}}" width="290px" height="160px" />
                    </div>
                </div>
                <div class="image-teknik-permesinan d-flex justify-content-end">
                    <div class="p-1">
                        <image src="{{asset('guest/assets/images/maklumatplayanan5.png')}}" width="290px" height="160px" />
                    </div>
                    <div class="p-1">
                        <image src="{{asset('guest/assets/images/maklumatplayanan6.png')}}" width="290px" height="160px" />
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="col-5 col-xl-6 logo-kemdikbud-kompetensi float-start">
                    <image src="{{asset('guest/assets/images/logo-kemdikbud.png')}}" width="70px" height="70px" />
                    <p class="col-6">Kementrian Pendidikan, Kebudayaan, Riset dan Teknologi</p>
                </div>
                <div class="col-5 col-xl-6 logo-bmti-kompetensi float-start">
                    <image src="{{asset('guest/assets/images/logo-bmti.png')}}" width="70px" height="70px" />
                    <p class="col-6">BBPPMPV BMTI <br /> Bidang Mesin dan Teknik Industri</p>
                </div>
            </div>
        </div>

        <div class="d-none">
            <div class="d-none">
                <div class="materi">
                    <div class="row">
                        <div class="col-11">
                            <h4 class="materi-title">Teknik Permesinan</h4>
                            <h2 class="materi-title-2">Tool Set Pada Mesin bubut CNC</h2>
                        </div>
                        <div class="col-1 button-kompetisi ">
                            <button class="btn btn-danger btn-circle btn-sm close float-end">X</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-xl-4">
                            <div class="title-by">
                                <image src="/images/avatar.png" width="35px" height="35px" />
                                <p>By Joko Suseno</p>
                                <p>Last Update July 27, 2021</p>
                            </div>
                        </div>

                        <div class="col-12 col-xl-8 content-materi">
                            <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQcWphCu27eoXvxZo0LFBPR9HbBdijeTS-eJeGttCBWCZYp1Ihnn4r2F1n5AA8bfg/embed?start=false&loop=false&delayms=3000" frameborder="0" width="800" height="420" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-1">
                            <div class="shared">
                                <a href="">
                                    <image src="/images/share-shared.png" width="70px" height="25px" />
                                </a>
                            </div>
                        </div>

                        <div class="col-1">
                            <div class="shared">
                                <a href="">
                                    <image src="/images/fb-shared.png" width="70px" height="25px" />
                                </a>
                            </div>
                        </div>

                        <div class="col-1">
                            <div class="shared">
                                <a href="">
                                    <image src="/images/twitter-shared.png" width="70px" height="25px" />
                                </a>
                            </div>
                        </div>

                        <div class="col-1">
                            <div class="shared">
                                <a href="">
                                    <image src="/images/google+-shared.png" width="70px" height="25px" />
                                </a>
                            </div>
                        </div>

                        <div class="col-1">
                            <div class="shared">
                                <a href="">
                                    <image src="/images/reddit-shared.png" width="70px" height="25px" />
                                </a>
                            </div>
                        </div>

                        <div class="col-1">
                            <div class="shared">
                                <a href="">
                                    <image src="/images/pinterest-shared.png" width="70px" height="25px" />
                                </a>
                            </div>
                        </div>

                        <div class="col-1">
                            <div class="shared">
                                <a href="">
                                    <image src="/images/email-shared.png" width="70px" height="25px" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-nowrap">
            <span class="galeria-kompetensi-kategori">Bahasa Inggris</span><span class="galeria-kompetensi-kategori">Bisnis Kontruksi & Property</span><span class="galeria-kompetensi-kategori">Design Pemodelan</span><span class="galeria-kompetensi-kategori">Bahasa Inggris</span><span class="galeria-kompetensi-kategori">Bahasa Inggris</span><span class="galeria-kompetensi-kategori">Bahasa Inggris</span>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 col-xl-4">
            <div class="img-teknik-permesinan shadow mt-5">
                <image src="/images/kompetensi-1.PNG" alt="Bricks" width="360px" height="250px" />
                <div>
                    <div class="image-text"></div>
                </div>
                <p>Tool Offset Pada Mesin Bubut CNC</p>
                <h5>Joko Suseno Jul 27, 2021</h5>
            </div>
        </div>
    </div>
</div>
@endsection