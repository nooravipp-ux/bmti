@extends('layouts.master-pembelajaran')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-5 mb-5">
        <div id="pengantar" class="col-12 col-xl-7 text-pembelajaran">
            <div class="box-proses">
                <p>Batasan Waktu : 01:00:00</p>
                <div class="progress">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100">75%</div>
                </div>
            </div>
            <?php $no = 1; ?>
            @foreach($pertanyaan as $prt)
            <div class="quiz mt-4">
                <p><?php echo $no++; ?>. {{$prt->pertanyaan}}</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="{{$prt->id}}" value="{{$prt->pilihan_a}}" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault">{{$prt->pilihan_a}}</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="{{$prt->id}}" value="{{$prt->pilihan_b}}" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault">{{$prt->pilihan_b}}</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="{{$prt->id}}" value="{{$prt->pilihan_c}}" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault">{{$prt->pilihan_c}}</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="{{$prt->id}}" value="{{$prt->pilihan_d}}" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault">{{$prt->pilihan_d}}</label>
                </div>
            </div>
            @endforeach
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