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
    <link rel="stylesheet" href="{{asset('guest/pembelajaran.css')}}">
    @yield('custom-css')

</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-5 col-lg-3 col-xl-2 ">
                    <div class="logo-header">
                        <a href="{{url('/')}}">
                            <img src="{{asset('guest/assets/images/logo-header.png')}}" width="150px" height="100px" />
                        </a>
                    </div>
                </div>

                <div class="col col-lg-2 col-xl-2 text-light text-header">
                    <p>Pelatihan Saya</p>
                </div>

                <div class="col col-xl-6"></div>

                <div class="col-4 col-md-3 col-lg-3 col-xl-2 text-light text-center text-header-2">
                    <p id="text-hover">{{auth()->user()->name}}</p>

                    <div class="text-hover-pembelajaran">
                        <div id="text-hover-2" class="text-hover-2">
                            <div class="row">
                                <div class="col-2">
                                    <a href="{{url('/dashboard')}}">
                                        <i class="fa-solid fa-house-chimney"></i>
                                    </a>
                                </div>
                                <div class="col-10 text-start">
                                    <a href="{{url('/dashboard')}}" class="btn-lg" role="button"
                                        aria-pressed="true">Dashboard</a>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-2">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-right-from-bracket"></i></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                                <div class="col-10 text-start">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="
                            btn-lg" role="button" aria-pressed="true">Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 menu-pembelajaran">
                    <div class="icon-pembelajaran" onclick="onClickMenu()"></div>
                </div>
            </div>
        </div>

        <div id="menu" class="d-none">
            <div class="menu-container">
                <div class="container">
                    <div class="d-flex justify-content-end">
                        <div class="col-2">
                            <div class="icon-menu-hover" onclick="onClickCloseMenu()"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center text-light text-header-menu">
                            <p>Pelatihan Saya</p>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-12">
                            <div class="text-hover-pembelajaran-menu">
                                <div class="text-hover-menu">
                                    <div class="row justify-content-center">
                                        <div class="col-1">
                                            <a href="{{url('/dashboard')}}">
                                                <i class="fa-solid fa-house-chimney"></i>
                                            </a>
                                        </div>
                                        <div class="col-4 text-start">
                                            <a href="{{url('/dashboard')}}" class="btn-lg" role="button"
                                                aria-pressed="true">Dashboard</a>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row justify-content-center">
                                        <div class="col-1">
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="fa-solid fa-right-from-bracket"></i></a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                        <div class="col-4 text-start">
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                class="
                            btn-lg" role="button" aria-pressed="true">Logout</a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12 content-pembelajaran-menu">
                            <div class="pembelajaran text-center bg-white">
                                <span>Konten Pembelajaran</span>
                            </div>

                            @foreach($topiks as $tp)
                            <div class="pembelajaran-box bg-white">
                                <div class="row">
                                    <div class="col-1">
                                        <input type="checkbox" name="dapatDiUlang" value="1" class="form-check-input">
                                    </div>
                                    <div class="col-8">
                                        <span>{{$tp->judul}}</span>
                                    </div>
                                    <div class="col-3">
                                        <span>1/1 Topik</span>
                                    </div>
                                </div>
                            </div>

                            @foreach($konten as $kt)
                            @if($kt->topik_id == $tp->id)
                            <div class="pembelajaran-box bg-white">
                                <div class="row justify-content-center">
                                    <div class="col-1">
                                        <input type="checkbox" name="dapatDiUlang" value="1" class="form-check-input">
                                    </div>
                                    <div class="col-9">
                                        <a href="{{route('pembelajaran.konten',['id' => $pelatihan->id, 'topikId' => $tp->id, 'kontenId' => $kt->id])}}"
                                            style="text-decoration: none;"><span>{{$kt->judul}}</span></a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                            @foreach($topikQuiz as $tq)
                            @if($tq->topik_id == $tp->id)
                            <div id="content" class="pembelajaran-box bg-white">
                                <div class="row justify-content-center">
                                    <div class="col-1">
                                        <input type="checkbox" name="dapatDiUlang" value="1" class="form-check-input">
                                    </div>
                                    <div class="col-9">
                                        <a href="{{route('pembelajaran.quiz',['id' => $pelatihan->id, 'topikId' => $tq->topik_id, 'quizId' => $tq->quiz_id])}}"
                                            style="text-decoration: none;">
                                            <span>{{$tq->judul}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            @endforeach

                            <div class="pembelajaran-bar text-center bg-white">
                                <p class="mt-4">Proses Pembelajaran</p>
                                <figure class="highcharts-figure">
                                    <div id="bar-2" style="height: 250px; margin:auto;"></div>
                                </figure>
                            </div>
                        </div>
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
                            <image src="{{asset('guest/assets/images/logo-header.png')}}" width="170px"
                                height="110px" />
                        </a>
                        <h1>Sahabat Cerdas</h1>
                    </div>
                </div>

                <div class="col-1">
                    <div class="share">
                        <a href="#">
                            <image class="icon-share" src="{{asset('guest/assets/images/fb-1.png')}}" height="30px"
                                width="30px" />
                        </a>
                        <br />
                        <a href="#">
                            <image class="icon-share" src="{{asset('guest/assets/images/twitter-1.png')}}" height="30px"
                                width="30px" />
                        </a>
                        <br />
                        <a href="#">
                            <image class="icon-share" src="{{asset('guest/assets/images/ig-1.png')}}" height="30px"
                                width="30px" />
                        </a>
                        <br />
                        <a href="#">
                            <image class="icon-share" src="{{asset('guest/assets/images/telegram.png')}}" height="30px"
                                width="30px" />
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="{{asset('guest/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    @yield('script')

    <script>
    function onClickMenu() {
        $('#menu').attr('class', '');
    }

    function onClickCloseMenu() {
        $('#menu').attr('class', '');
        $('#menu').addClass('d-none');
    }

    function myFunctionMenu() {
        if (document.getElementById("icon-menu-1").src ==
            "{{asset('guest/assets/images/collapse-down.png')}}") {
            document.getElementById("icon-menu-1").src = "{{asset('guest/assets/images/collapse-up.png')}}";
        } else {
            document.getElementById("icon-menu-1").src =
                "{{asset('guest/assets/images/collapse-down.png')}}";
        }
        $('#materi-menu-1').attr('class', '');
        var x = document.getElementById("materi-menu-1");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    document.getElementById("text-hover").addEventListener('mouseover', function() {
        document.getElementById("text-hover-2").style.display = "block";
    });

    document.getElementById("text-hover-2").addEventListener('mouseover', function() {
        document.getElementById("text-hover-2").style.display = "block";
    });

    document.getElementById("text-hover-2").addEventListener('mouseleave', function() {
        document.getElementById("text-hover-2").style.display = "none";
    });

    document.getElementById("text-hover").addEventListener('mouseleave', function() {
        document.getElementById("text-hover-2").style.display = "none";
    });
    </script>

    <script type="text/javascript">
    Highcharts.chart('bar-2', {
        chart: {
            type: 'pie'
        },
        title: {
            text: ''
        },
        credits: {
            enabled: false
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:12px; fontFamily:glory;">{point.key}</span><table>',
            pointFormat: '<td style="padding:0;"><b>{point.percentage:.1f}%</b></td></tr>',
            footerFormat: '</table>',
            useHTML: true
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.percentage:.1f} %'
                },
                showInLegend: true,

                depth: 35,
                dataLabels: {
                    formatter: function() {
                        if (this.percentage != 0) return Math.round(this.percentage) + '%';
                    },
                    distance: -22,
                    style: {
                        color: 'white',
                        fontSize: '14px'
                    }
                }
            }
        },
        series: [{
            innerSize: '50%',
            data: [
                ['Complete', 10],
                ['Non Complete', 8],
            ],
            colors: ['#2289FF', '#E0DECA']
        }]
    });
    </script>
</body>

</html>

<!-- <div class="container-fluid">
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

        <div class="col-2 text-light text-center">
            <p id="text-hover" class="text-header-2">{{auth()->user()->name}}</p>
            <div id="text-hover-2" class="text-hover-2">
                <div class="row">
                    <div class="col-2">
                        <a href="{{url('/dashboard')}}">
                            <i class="fa-solid fa-house-chimney"></i>
                        </a>
                    </div>
                    <div class="col-10 text-start">
                        <a href="{{url('/dashboard')}}" class="btn-lg" role="button" aria-pressed="true">Dashboard</a>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-2">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    <div class="col-10 text-start">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="
                            btn-lg" role="button" aria-pressed="true">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-2 order-3 icon-menu mt-4 d-none">
            <div class="icon-menu-2" onclick="onClickMenu()"></div>
        </div>
    </div>
</div> -->