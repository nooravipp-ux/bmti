@extends('layouts.master-pembelajaran')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-5 mb-5">
        <div id="pengantar" class="col-12 col-xl-7 text-pembelajaran">
            <h1>Pengantar<button class="btn rounded-pill text-light">Selesai</button></h1>
            <p class="mt-3">Data Pokok Dikdasmen Tahun Ajaran 2019-2020 mencatat ada lebih dari 2,7 juta Guru yang
                tersebar disetiap jenjang Pendidikan termasuk diantaranya lebih dari tiga ratus ribu Guru SMK yang
                tersebar di seluruh Propinsi se Indonesia. BBPPMPV BMTI sebagai Unit Pelaksana Teknis di bawah Ditjen
                Vokasi yang salah satu fungsinya melaksanakan peningkatan kompetensi guru Kejuruan, perlu mengatur
                strategi agar dapat melaksanakan tugas sesuai tuntutan. Sebagai UPT Kemdikbud, BBPPMPV BMTI memiliki
                kapasitas pelatihan tatap muka yang terbatas, yang berarti jumlah guru yang dapat mengikuti diklat tatap
                muka setiap tahunnya pun terbatas.
            <p>Di sisi lain, tingginya keinginan guru dan siswa, untuk dapat "merdeka belajar", di mana saja dan kapan
                saja, serta dengan siapa saja, merupakan tantangan yang harus dijawab oleh penyelenggara Pendidikan,
                termasuk oleh BBPPMPV BMTI. Pendidik maupun siswa di era milenial 4.0 dengan akses internet yang semakin
                mudah, justru membutuhkan bentuk pelatihan peningkatan kompetensi yang dapat mengakomodasi fleksibilitas
                dari segi waktu, akses, ruang, yang disesuaikan dengan waktu yang mereka miliki. Fakta lapangan ini
                dapat didefinisikan sebagai besarnya kebutuhan platform pembelajaran kejuruan yang fleksibel berbasis
                digital di era Revolusi Industri 4.0.
            <p>Bidang Keahlian Teknologi dan Rekayasa sebagai bidang Garapan utama BBPPMPV BMTI merupakan bidang yang
                kompleks dengan karakteristik yang berbeda-beda untuk setiap Kompetensi Keahliannya. Kondisi ini pun
                adalah dinamika yang harus difahami oleh Pengembang Teknologi Pembelajaran di BBPPMPV sebagai
                lnstructional Designer. PTP di BBPPMPV diharapkan dapat merumuskan berbagai model dan media pembelajaran
                yang sesuai dengan setiap Kompetensi Keahlian yang ada di Satkernya.
            <p>Jawaban kebutuhan pelatihan kejuruan oleh BBPPMPV BMTI dirumuskan dalam platform yang dinamai Galeri
                Kejuruan. Filosofi "merdeka belajar" bagi BBPPMPV BMTI dapat ditinjau dari beberapa sisi, bagi seorang
                pendidik atau siswa yang menginginkan peningkatan kompetensi pada platform pembelajaran kejuruan ini,
                yang dijabarkan dalam garis besar pengembangan Galeri Kejuruan, salah satunya adalah PELATIHAN MANDIRI.
                Pelatihan Mandiri pada Galeri Kejuruan adalah sarana pembelajaran berbasis web yang dapat dimanfaatkan
                oleh guru dalam meningkatkan kompetensinya. Sumber belajar ini dibuat secara terbuka, mudah akses, dan
                diharapkan dapat menjadi alternatif sarana belajar sesuai kompetensi yang diampu. Peserta dapat
                mengalokasikan waktunya secara mandiri, memilih pelatihan yang sesuai dengan minatnya. Peserta dapat
                mengakses berbagai media sebagai bahan belajar, dan menempuh tes atau kuis sesuai dengan Pelatihan yang
                dipilih.
            </p>
        </div>

        <div class="button-hidden">
            <img src="{{asset('guest/assets/images/collapse-right.png')}}" id="icon-pembelajaran"
                style="widht=20px; height:20px;" onclick="myFunction()" />
        </div>

        <div id="content-pembelajaran" class="col-12 col-xl-2 content-pembelajaran">
            <div class="pembelajaran text-center bg-white">
                <span>Konten Pembelajaran</span>
            </div>
            <div class="pembelajaran-2 bg-white">
                <div class="row justify-content-center">
                    <div class="col-1">
                        <img src="{{asset('guest/assets/images/collapse-down.png')}}" id="icon-pembelajaran-1"
                            style="margin-left: -10px; margin-top: 13px; widht=20px; height:20px;"
                            onclick="myFunction1()" />
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
                        <img id="icon-pembelajaran-2" src="{{asset('guest/assets/images/collapse-down.png')}}"
                            style="margin-left: -10px; margin-top: 13px; widht=20px; height:20px;"
                            onclick="myFunction2()" />
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
                        <img src="{{asset('guest/assets/images/collapse-down.png')}}" id="icon-pembelajaran-3"
                            style="margin-left: -10px; margin-top: 13px; widht=20px; height:20px;"
                            onclick="myFunction3()" />
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
                        <img src="{{asset('guest/assets/images/collapse-down.png')}}" id="icon-pembelajaran-4"
                            style="margin-left: -10px; margin-top: 13px; widht=20px; height:20px;"
                            onclick="myFunction4()" />
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
                        <img src="{{asset('guest/assets/images/collapse-down.png')}}" id="icon-pembelajaran-5"
                            style="margin-left: -10px; margin-top: 13px; widht=20px; height:20px;"
                            onclick="myFunction5()" />
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
                        <img src="{{asset('guest/assets/images/collapse-down.png')}}" id="icon-pembelajaran-6"
                            style="margin-left: -10px; margin-top: 13px; widht=20px; height:20px;"
                            onclick="myFunction6()" />
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
                        <img src="{{asset('guest/assets/images/collapse-down.png')}}" id="icon-pembelajaran-7"
                            style="margin-left: -10px; margin-top: 13px; widht=20px; height:20px;"
                            onclick="myFunction7()" />
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

    <div class="row">
        <div class="col-12 next-pembelajaran text-center">
            <p>Topik Selanjutnya : <span>Tes Awal</span></p>
        </div>
    </div>
</div>

@endsection @section('script')
<script src="{{asset('admin/vendors/highchart/code/highcharts.js')}}"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

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
function myFunction() {
    if (document.getElementById("icon-pembelajaran").src == "{{asset('guest/assets/images/collapse-right.png')}}") {
        document.getElementById("icon-pembelajaran").src = "{{asset('guest/assets/images/collapse-left.png')}}";
    } else {
        document.getElementById("icon-pembelajaran").src = "{{asset('guest/assets/images/collapse-right.png')}}";
    }
    var x = document.getElementById("content-pembelajaran");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function myFunction1() {
    if (document.getElementById("icon-pembelajaran-1").src == "{{asset('guest/assets/images/collapse-down.png')}}") {
        document.getElementById("icon-pembelajaran-1").src = "{{asset('guest/assets/images/collapse-up.png')}}";
    } else {
        document.getElementById("icon-pembelajaran-1").src = "{{asset('guest/assets/images/collapse-down.png')}}";
    }
    $('#materi-1').attr('class', '');
    var x = document.getElementById("materi-1");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function myFunction2() {
    if (document.getElementById("icon-pembelajaran-2").src == "{{asset('guest/assets/images/collapse-down.png')}}") {
        document.getElementById("icon-pembelajaran-2").src = "{{asset('guest/assets/images/collapse-up.png')}}";
    } else {
        document.getElementById("icon-pembelajaran-2").src = "{{asset('guest/assets/images/collapse-down.png')}}";
    }
    $('#materi-2').attr('class', '');
    var x = document.getElementById("materi-2");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function myFunction3() {
    if (document.getElementById("icon-pembelajaran-3").src == "{{asset('guest/assets/images/collapse-down.png')}}") {
        document.getElementById("icon-pembelajaran-3").src = "{{asset('guest/assets/images/collapse-up.png')}}";
    } else {
        document.getElementById("icon-pembelajaran-3").src = "{{asset('guest/assets/images/collapse-down.png')}}";
    }
    $('#materi-3').attr('class', '');
    var x = document.getElementById("materi-3");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function myFunction4() {
    if (document.getElementById("icon-pembelajaran-4").src == "{{asset('guest/assets/images/collapse-down.png')}}") {
        document.getElementById("icon-pembelajaran-4").src = "{{asset('guest/assets/images/collapse-up.png')}}";
    } else {
        document.getElementById("icon-pembelajaran-4").src = "{{asset('guest/assets/images/collapse-down.png')}}";
    }
    $('#materi-4').attr('class', '');
    var x = document.getElementById("materi-4");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function myFunction5() {
    if (document.getElementById("icon-pembelajaran-5").src == "{{asset('guest/assets/images/collapse-down.png')}}") {
        document.getElementById("icon-pembelajaran-5").src = "{{asset('guest/assets/images/collapse-up.png')}}";
    } else {
        document.getElementById("icon-pembelajaran-5").src = "{{asset('guest/assets/images/collapse-down.png')}}";
    }
    $('#materi-5').attr('class', '');
    var x = document.getElementById("materi-5");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function myFunction6() {
    if (document.getElementById("icon-pembelajaran-6").src == "{{asset('guest/assets/images/collapse-down.png')}}") {
        document.getElementById("icon-pembelajaran-6").src = "{{asset('guest/assets/images/collapse-up.png')}}";
    } else {
        document.getElementById("icon-pembelajaran-6").src = "{{asset('guest/assets/images/collapse-down.png')}}";
    }
    $('#materi-6').attr('class', '');
    var x = document.getElementById("materi-6");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function myFunction7() {
    if (document.getElementById("icon-pembelajaran-7").src == "{{asset('guest/assets/images/collapse-down.png')}}") {
        document.getElementById("icon-pembelajaran-7").src = "{{asset('guest/assets/images/collapse-up.png')}}";
    } else {
        document.getElementById("icon-pembelajaran-7").src = "{{asset('guest/assets/images/collapse-down.png')}}";
    }
    $('#materi-7').attr('class', '');
    var x = document.getElementById("materi-7");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>
@endsection