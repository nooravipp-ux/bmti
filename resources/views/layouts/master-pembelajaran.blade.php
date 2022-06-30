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
    <link rel="stylesheet" href="{{asset('guest/pembelajaran.css')}}"> @yield('custom-css')

</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="logo-header">
                        <a href="{{url('/')}}">
                            <img src="{{asset('guest/assets/images/logo-header.png')}}" width="150px" height="100px" />
                        </a>
                    </div>
                </div>

                <div class="col-2 text-light">
                    <p class="text-header">Pelatihan Saya</p>
                </div>

                <div class="col-6"></div>

                <div class="col-2 text-light">
                    <p class="text-header">Ahmad Winarto</p>
                </div>

                <div class="col-2 order-3 icon-menu mt-4 d-none">
                    <div class="icon-menu-2" onclick="onClickMenu()"></div>
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
                        <a href="/">
                            <image src="{{asset('guest/assets/images/logo-header.png')}}" width="170px" height="110px" />
                        </a>
                        <h1>Sahabat Cerdas</h1>
                    </div>
                </div>

                <div class="col-1">
                    <div class="share">
                        <a href="#">
                            <image class="icon-share" src="{{asset('guest/assets/images/fb-1.png')}}" height="30px" width="30px" />
                        </a>
                        <br />
                        <a href="#">
                            <image class="icon-share" src="{{asset('guest/assets/images/twitter-1.png')}}" height="30px" width="30px" />
                        </a>
                        <br />
                        <a href="#">
                            <image class="icon-share" src="{{asset('guest/assets/images/ig-1.png')}}" height="30px" width="30px" />
                        </a>
                        <br />
                        <a href="#">
                            <image class="icon-share" src="{{asset('guest/assets/images/telegram.png')}}" height="30px" width="30px" />
                        </a>
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

    <div id="menu" class="d-none">
        <div class="menu-container">
            <div class="menu-2">
                <div class="d-flex justify-content-end">
                    <div class="col-2">
                        <div class="icon-menu-hover" onclick="onClickCloseMenu()"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="nav">
                            <li>
                                <a href="{{url('/')}}">Beranda</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <ul class="nav">
                            <li>
                                <a href="{{url('/galeria')}}">Galeria</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <ul class="nav">
                            <li>
                                <a href="{{url('/pelatihan-mandiri')}}">Pelatihan Mandiri</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <ul class="nav">
                            <li>
                                <input class="collapse-mandiri-2" type="checkbox" id="collapse-mandiri-2" />
                                <label for="collapse-mandiri-2">Pelatihan Terbimbing</label>
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
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <ul class="nav">
                            <li>
                                <a href="{{url('/alur-pembelajaran')}}">Alur Pembelajaran</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="login" class="d-none">
        <div class="bg-login">
            <!-- Validation Errors -->
            <div class="d-flex">
                <x-auth-validation-errors id="error" class="text-popup mb-4 text-center bg-white rounded" :errors="$errors" />
            </div>

            <!-- Session Status -->
            <div class="d-flex">
                <x-auth-session-status class="text-popup mb-4 text-center bg-white rounded" :status="session('status')" />

                <div class="login-container">
                    <div class="d-flex">
                        <div class="left-box mt-4">
                            <image class="logo-login" src="{{asset('guest/assets/images/logo-header.png')}}" width="140px" height="100px" />
                            <h2 class="login-title">LOGIN</h2>

                            <form class="mt-5" method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="form-login">
                                    <x-input class="email" id="email" class="block mt-1 w-full" placeholder="Masukan Username / E-mail" type="email" name="email" :value="old('email')" required autofocus/>
                                </div>

                                <!-- Password -->
                                <div class="form-login mt-5">
                                    <x-input id="password" class="block mt-1 w-full" placeholder="Masukan Password" type="password" name="password" required autocomplete="current-password" />
                                </div>

                                <!-- Remember Me -->
                                <div class="row justify-content-between mt-3">
                                    <div class="col-5">
                                        <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                    </div>
                                    <div class="col-3">
                                        <div class="clik-LupaPassword" onclick="onClickLupaPassword()">Lupa Password ?</div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center mt-5">
                                    <div class="col-2">
                                        <button class="btn-login rounded-pill text-dark font-weight-bold">
                                        {{ __('Masuk') }}
                                    </button>
                                    </div>
                                </div>

                                <div class="row text-center mt-3">
                                    <p>Atau</p>
                                </div>
                            </form>

                            <div class="row text-center mt-2 clik-register">
                                <span>Belum Memiliki Akun ?<span>
                            <button onclick="onClickRegister()">Daftar</button>
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="row pt-3">
                            <div class="col-5 d-flex">
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-xl-5 logo-login-right-1">
                                        <image src="{{asset('guest/assets/images/logo-kemdikbud.png')}}" width="70px" height="70px"/>
                                    </div>
                                    <div class="col-12 col-xl-7 text-logo-right-1 mt-1">
                                        <span>Kementrian Pendidikan, Kebudayaan, Riset dan Teknologi</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 d-flex">
                        <div class="row mt-3">
                            <div class="col-12 col-xl-5 logo-login-right-2">
                                <image src="{{asset('guest/assets/images/logo-bmti.png')}}" width="70px" height="70px" />
                            </div>
                            <div class="col-12 col-xl-7 text-logo-right-2 mt-1">
                                <span>BBPPMPV BMTI <br/> Bidang Mesin dan Teknik Industri</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 d-flex">
                        <button class="btn-closed btn-danger btn-sm btn-circle" onclick="onClickCloseLogin()">X</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div id="register" class="d-none">
        <div class="bg-register">
            <!-- Validation Errors -->
            <div class="d-flex">
                <x-auth-validation-errors id="error" class="text-popup mb-4 text-center bg-white rounded" :errors="$errors" />
            </div>

            <div class="register-container">
                <div class="d-flex">
                    <div class="left-box mt-4">
                        <image class="logo-login" src="{{asset('guest/assets/images/logo-header.png')}}" width="140px" height="100px" />
                        <h2 class="login-title">DAFTAR</h2>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="form-login mt-4">
                                <x-input id="name" class="block mt-1 w-full" placeholder="Masukan Nama Lengkap" type="text" name="name" :value="old('name')" required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="form-login mt-4">
                                <x-input id="email" class="block mt-1 w-full" placeholder="Masukan E-mail" type="email" name="email" :value="old('email')" required />
                            </div>

                            <!-- Password -->
                            <div class="form-login mt-4">
                                <x-input id="password" class="block mt-1 w-full" placeholder="Masukan Password" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-login mt-4">
                                <x-input id="password_confirmation" class="block mt-1 w-full" placeholder="Konfirmasi Password" type="password" name="password_confirmation" required />
                            </div>

                            <div class="d-flex justify-content-end mt-3 clik-sudah-daftar">
                                <button onclick="onClickDaftar()">Sudah Terdaftar ?</button>
                            </div>

                            <div class="d-flex justify-content-center mt-4 clik-daftar">
                                <div class="col-2">
                                    <button class="btn-login rounded-pill text-dark font-weight-bold">
                                        {{ __('Daftar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="right-box">
                        <div class="row pt-3">
                            <div class="col-5 d-flex">
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-xl-5 logo-login-right-1">
                                        <image src="{{asset('guest/assets/images/logo-kemdikbud.png')}}" width="70px" height="70px" />
                                    </div>
                                    <div class="col-12 col-xl-7 text-logo-right-1 mt-1">
                                        <span>Kementrian Pendidikan, Kebudayaan, Riset dan Teknologi</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 d-flex">
                                <div class="row mt-3">
                                    <div class="col-12 col-xl-5 logo-login-right-2">
                                        <image src="{{asset('guest/assets/images/logo-bmti.png')}}" width="70px" height="70px" />
                                    </div>
                                    <div class="col-12 col-xl-7 text-logo-right-2 mt-1">
                                        <span>BBPPMPV BMTI <br/> Bidang Mesin dan Teknik Industri</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 d-flex">
                                <button class="btn-closed btn-danger btn-sm btn-circle" onclick="onClickCloseRegister()">X</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="LupaPassword" class="d-none">
        <div class="bg-LupaPassword">
            <!-- Validation Errors -->
            <div class="d-flex">
                <x-auth-validation-errors id="error" class="text-popup mb-4 text-center bg-white rounded" :errors="$errors" />
            </div>

            <!-- Session Status -->
            <div class="d-flex">
                <x-auth-session-status class="text-popup mb-4 text-center bg-white rounded" :status="session('status')" />
            </div>

            <div class="LupaPassword-container">
                <div class="d-flex">
                    <div class="left-box mt-4">
                        <image class="logo-login" src="{{asset('guest/assets/images/logo-header.png')}}" width="140px" height="100px" />
                        <div class="text-forget text-center mb-4 mt-5 text-sm text-gray-600">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="form-login mt-5">
                                <x-input id="email" class="block mt-1 w-full" placeholder="Masukan E-mail" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="d-flex justify-content-center clik-forget mt-5">
                                <button class="btn-forget rounded-pill text-dark font-weight-bold">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="right-box">
                        <div class="row pt-3">
                            <div class="col-5 d-flex">
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-xl-5 logo-login-right-1">
                                        <image src="{{asset('guest/assets/images/logo-kemdikbud.png')}}" width="70px" height="70px" />
                                    </div>
                                    <div class="col-12 col-xl-7 text-logo-right-1 mt-1">
                                        <span>Kementrian Pendidikan, Kebudayaan, Riset dan Teknologi</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 d-flex">
                                <div class="row mt-3">
                                    <div class="col-12 col-xl-5 logo-login-right-2">
                                        <image src="{{asset('guest/assets/images/logo-bmti.png')}}" width="70px" height="70px" />
                                    </div>
                                    <div class="col-12 col-xl-7 text-logo-right-2 mt-1">
                                        <span>BBPPMPV BMTI <br/> Bidang Mesin dan Teknik Industri</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 d-flex">
                                <button class="btn-closed btn-danger btn-sm btn-circle" onclick="onClickCloseLupaPassword()">X</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{asset('guest/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    @yield('script')

    <script>
        $(function() {
            var current = location.pathname;
            console.log(current)
            $('.nav li a').each(function() {
                var $this = $(this);
                // if the current path is like this link, make it active
                if ($this.attr('href').indexOf(current) != -1) {
                    $this.addClass('active');
                }
            })
        })

        function onClickMenu() {
            $('#menu').attr('class', '');
        }

        function onClickCloseMenu() {
            $('#menu').attr('class', '');
            $('#menu').addClass('d-none');
        }

        function onClickLogin() {
            $('#login').attr('class', '');
        }

        function onClickCloseLogin() {
            $('#login').addClass('d-none');
        }

        function onClickRegister() {
            $('#login').addClass('d-none');
            $('#register').attr('class', '');
        }

        function onClickCloseRegister() {
            $('#register').addClass('d-none');
        }

        function onClickDaftar() {
            $('#register').addClass('d-none');
            $('#login').attr('class', '');
        }

        function onClickLupaPassword() {
            $('#login').addClass('d-none');
            $('#LupaPassword').attr('class', '');
        }

        function onClickCloseLupaPassword() {
            $('#LupaPassword').addClass('d-none');
        }
    </script>
</body>

</html>