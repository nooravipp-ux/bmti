<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') </title>
    <link rel="shortcut icon" href="{{asset('guest/assets/images/logo.png')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Glory&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('guest/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/global.css')}}">
    <link rel="stylesheet" href="{{asset('guest/responsive.css')}}">
    @yield('custom-css')

</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-7 col-md-9 col-xl-2 order-1">
                    <div class="logo-header">
                        <a href="/">
                            <image src="{{asset('guest/assets/images/logo-header.png')}}" width="150px" height="100px" />
                        </a>
                    </div>
                </div>

                <div class="col-12 col-xl-9 order-4 order-xl-2">
                    <div class="menu">
                        <ul class="nav">
                            <li class="margin-nav">
                                <a href="{{url('/')}}">
                                    Beranda
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/galeria')}}">Galeria</a>
                            </li>
                            <li>
                                <a href="{{url('/pelatihan-mandiri')}}">Pelatihan Mandiri</a>
                            </li>
                            <li>
                                <input class="collapse-mandiri" type="checkbox" id="collapse-mandiri" />
                                <label for="collapse-mandiri">Pelatihan Terbimbing</label>
                                <div class="mandiri-hidden-1 font-italic">
                                    <a href="">- Upskilling dan Reskilling</a>
                                </div>
                                <div class="mandiri-hidden-2">
                                    <a href="">- Peningkatan Kompetensi &nbsp;&nbsp;&nbsp;Berkelanjutan</a>
                                </div>
                                <div class="mandiri-hidden-3">
                                    <a href="">- Suplemen Kompetensi &nbsp;&nbsp;&nbsp;Keahlian</a>
                                </div>
                            </li>
                            <li>
                                <a href="{{url('/alur-pembelajaran')}}">Alur Pembelajaran</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-3 col-md-2 col-xl-1 order-2 order-xl-3">
                    <div class="akun-button text-center">
                        <a href="{{url('login')}}" class="btn-lg" role="button" aria-pressed="true">LOGIN</a>
                    </div>
                </div>

                <div class="col-2 col-md-1 col-xl-1 order-3 icon-menu mt-4">
                    <div class="icon-menu-2"></div>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="logo-footer">
                        <link href="/">
                        <image src="{{asset('guest/assets/images/logo-header.png')}}" width="170px" height="110px" />
                        </link>
                        <h1>Sahabat Cerdas</h1>
                    </div>
                </div>

                <div class="col-1">
                    <div class="share">
                        <link href="#">
                        <image class="icon-share" src="{{asset('guest/assets/images/fb-1.png')}}" height="30px" width="30px" />
                        </link>
                        <br />
                        <link href="#">
                        <image class="icon-share" src="{{asset('guest/assets/images/twitter-1.png')}}" height="30px" width="30px" />
                        </link>
                        <br />
                        <link href="#">
                        <image class="icon-share" src="{{asset('guest/assets/images/ig-1.png')}}" height="30px" width="30px" />
                        </link>
                        <br />
                        <link href="#">
                        <image class="icon-share" src="{{asset('guest/assets/images/telegram.png')}}" height="30px" width="30px" />
                        </link>
                    </div>
                </div>

                <div class="col-2">
                    <div class="text-1">
                        <span>Useful links</span>
                        <p>About</p>
                        <p>Partners</p>
                        <p>Contact</p>
                    </div>
                </div>

                <div class="col-2">
                    <div class="text-2">
                        <span>Help?</span>
                        <p>FAQ</p>
                        <p>Term & Condition</p>
                        <p>Policy</p>
                        <p>Privacy</p>
                    </div>
                </div>

                <div class="col-4">
                    <div class="address">
                        <span>Alamat</span>
                        <p>BBPPMPV Bidang Mesin dan Teknik Industri</p>
                        <p>(BBPPMPV BMTI), Jl. Pesantren KM 2, Cibabat, Cimahi Utara 40513.</p>
                        <p>Email : bbppmpv.bmti@kemdikbud.go.id</p>
                        <p>Tel/Wa : (022) 6652326 / 08112242326</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 copyright text-center mt-2">
                    <span>© 2022 - Galeri Kenjuruan. All Rights Reserved.</span>
                </div>
                <div class="col-6 copyright text-center mt-2">
                    <span>Term & Condition | Privacy Policy</span>
                </div>
            </div>
        </div>
    </footer>

    <div class="float-button-wrapper">
        <div class="float-button-page">
            <a href="#">
                <div class="img-share-1"></div>
            </a>
            <a href="#">
                <div class="img-share-2"></div>
            </a>
            <a href="#">
                <div class="img-share-3"></div>
            </a>
            <a href="#">
                <div class="img-share-4"></div>
            </a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{asset('guest/assets/bootstrap/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @yield('script')
</body>

</html>