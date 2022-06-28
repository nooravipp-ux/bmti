@extends('layouts.master-pembelajaran')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-5 mb-5">
        <div id="pengantar" class="col-12 col-xl-7 text-pembelajaran">
            <h1>Tes Awal<button class="btn rounded-pill text-light">Selesai</button></h1>
            <p>Tes Awal ini bertujuan untuk mengukur sejauh mana pengetahuan awal terkait materi membuat model 3D dengan
                CAD, terdiri dari pernyataan pilihan ganda dan waktu yang diberikan untuk mengerjakan adalah 15 menit.
            </p>

            <div class="row justify-content-center text-center mt-3">
                <p><b>Selamat Mengerjakan</b></p>
                <button class="btn-quiz rounded-pill text-light font-weight-bold">Mengulang Quiz</button>
            </div>
        </div>
        <div class="col-12 col-xl-2">
            <div class="pembelajaran text-center bg-white">
                <span>Konten Pembelajaran</span>
            </div>
            <div class="content-pembelajaran">
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up" onclick="myFunction1()"></i>
                        </div>
                        <div class="col-8">
                            <span>Pengantar</span>
                            <p>1/1 Topik</p>
                        </div>
                        <div class="col-2">
                            <input type="checkbox" />
                        </div>
                    </div>
                </div>
                <div id="materi-1" class="d-none">
                    <div class="pembelajaran-3 bg-white">
                        <div class="row justify-content-end">
                            <div class="col-1">
                                <input type="checkbox" />
                            </div>
                            <div class="col-10">
                                <span> 1. Pengantar</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up" onclick="myFunction2()"></i>
                        </div>
                        <div class="col-8">
                            <span>Tes Awal</span>
                            <p>1/1 Topik</p>
                        </div>
                        <div class="col-2">
                            <input type="checkbox" />
                        </div>
                    </div>
                </div>
                <div id="materi-2" class="d-none">
                    <div class="pembelajaran-3 bg-white">
                        <div class="row justify-content-end">
                            <div class="col-1">
                                <input type="checkbox" />
                            </div>
                            <div class="col-10">
                                <span> 1. Tes Awal</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up" onclick="myFunction3()"></i>
                        </div>
                        <div class="col-8">
                            <span>Pendahulu</span>
                            <p>1/1 Topik</p>
                        </div>
                        <div class="col-2">
                            <input type="checkbox" />
                        </div>
                    </div>
                </div>
                <div id="materi-3" class="d-none">
                    <div class="pembelajaran-3 bg-white">
                        <div class="row justify-content-end">
                            <div class="col-1">
                                <input type="checkbox" />
                            </div>
                            <div class="col-10">
                                <span> 1. Pendahuluan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up" onclick="myFunction4()"></i>
                        </div>
                        <div class="col-8">
                            <span>Kegiatan Pembelajaran 1</span>
                            <p>1/1 Topik</p>
                        </div>
                        <div class="col-2">
                            <input type="checkbox" />
                        </div>
                    </div>
                </div>
                <div id="materi-4" class="d-none">
                    <div class="pembelajaran-3 bg-white">
                        <div class="row justify-content-end">
                            <div class="col-1">
                                <input type="checkbox" />
                            </div>
                            <div class="col-10">
                                <span> 1. Kegiatan Pembelajaran 1</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up" onclick="myFunction5()"></i>
                        </div>
                        <div class="col-8">
                            <span>Kegiatan Pembelajaran 2</span>
                            <p>1/1 Topik</p>
                        </div>
                        <div class="col-2">
                            <input type="checkbox" />
                        </div>
                    </div>
                </div>
                <div id="materi-5" class="d-none">
                    <div class="pembelajaran-3 bg-white">
                        <div class="row justify-content-end">
                            <div class="col-1">
                                <input type="checkbox" />
                            </div>
                            <div class="col-10">
                                <span> 1. Kegiatan Pembelajaran 2</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up" onclick="myFunction6()"></i>
                        </div>
                        <div class="col-8">
                            <span>Refleksi</span>
                            <p>1/1 Topik</p>
                        </div>
                        <div class="col-2">
                            <input type="checkbox" />
                        </div>
                    </div>
                </div>
                <div id="materi-6" class="d-none">
                    <div class="pembelajaran-3 bg-white">
                        <div class="row justify-content-end">
                            <div class="col-1">
                                <input type="checkbox" />
                            </div>
                            <div class="col-10">
                                <span> 1. Refleksi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up" onclick="myFunction7()"></i>
                        </div>
                        <div class="col-8">
                            <span>Tes Akhir dan Umpan Balik</span>
                            <p>1/1 Topik</p>
                        </div>
                        <div class="col-2">
                            <input type="checkbox" />
                        </div>
                    </div>
                </div>
                <div id="materi-7" class="d-none">
                    <div class="pembelajaran-3 bg-white">
                        <div class="row justify-content-end">
                            <div class="col-1">
                                <input type="checkbox" />
                            </div>
                            <div class="col-10">
                                <span> 1. Tes Akhir dan Umpan Balik</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pembelajaran text-center bg-white">
                    <p class="mt-4">Proses Pembelajaran</p>
                    <figure class="highcharts-figure">
                        <div id="bar" style="height: 250px; margin:auto;"></div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection @section('script')
<script src="{{asset('admin/vendors/highchart/code/highcharts.js')}}"></script>

<script type="text/javascript">
Highcharts.chart('bar', {
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

<script>
function myFunction1() {
    $('#materi-1').attr('class', '');
    var x = document.getElementById("materi-1");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function myFunction2() {
    $('#materi-2').attr('class', '');
    var x = document.getElementById("materi-2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function myFunction3() {
    $('#materi-3').attr('class', '');
    var x = document.getElementById("materi-3");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function myFunction4() {
    $('#materi-4').attr('class', '');
    var x = document.getElementById("materi-4");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function myFunction5() {
    $('#materi-5').attr('class', '');
    var x = document.getElementById("materi-5");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function myFunction6() {
    $('#materi-6').attr('class', '');
    var x = document.getElementById("materi-6");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function myFunction7() {
    $('#materi-7').attr('class', '');
    var x = document.getElementById("materi-7");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
@endsection