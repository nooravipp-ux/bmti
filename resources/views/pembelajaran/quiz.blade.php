@extends('layouts.master-pembelajaran')

@section('custom-css')
<style>
    .form-check {
        padding-left: 50px;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-7">
            <div class="box-proses mt-3 mb-3">
                <p id="demo" style="font-size: 30px;"></p>
                <!-- <div class="progress">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div> -->
            </div>
            <?php $no = 1; ?>
            <form id="form-kuis" action="{{route('pembelajaran.quiz.tandaiSelesai', ['id' => $pelatihanId, 'topikId' => $topikId, 'quizId' => $quizId])}}" method="POST">
                @csrf
                @foreach($pertanyaan as $prt)
                <div class="quiz mt-4">
                    <p><?php echo $no++; ?>. {{$prt->pertanyaan}}</p>
                    <div class="form-check" style="padding-left: 40px;">
                        <input class="form-check-input" type="radio" name="jawaban[{{$prt->id}}][benar]" value="{{$prt->pilihan_a}}" class="form-check-input">
                        <label class="form-check-label" for="flexRadioDefault">{{$prt->pilihan_a}}</label>
                    </div>
                    <div class="form-check" style="padding-left: 40px;">
                        <input class="form-check-input" type="radio" name="jawaban[{{$prt->id}}][benar]" value="{{$prt->pilihan_b}}" class="form-check-input">
                        <label class="form-check-label" for="flexRadioDefault">{{$prt->pilihan_b}}</label>
                    </div>
                    <div class="form-check" style="padding-left: 40px;">
                        <input class="form-check-input" type="radio" name="jawaban[{{$prt->id}}][benar]" value="{{$prt->pilihan_c}}" class="form-check-input">
                        <label class="form-check-label" for="flexRadioDefault">{{$prt->pilihan_c}}</label>
                    </div>
                    <div class="form-check" style="padding-left: 40px;">
                        <input class="form-check-input" type="radio" name="jawaban[{{$prt->id}}][benar]" value="{{$prt->pilihan_d}}" class="form-check-input">
                        <label class="form-check-label" for="flexRadioDefault">{{$prt->pilihan_d}}</label>
                    </div>
                </div>
                @endforeach
                <div class="quiz mt-4">
                    <div class="form">
                        <button type="submit" class="btn btn-md btn-primary">Selesai</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <div class="row mt-3">
                <div class="bg-white">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-start">
                            <h5>Konten Pembelajaran</h5>
                        </li>
                    </ul>
                </div>
                @foreach($topiks as $tp)
                <div class="bg-white">
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

<!-- <script>
    var countDownDate = new Date("Jul 5, 2022 04:10:25").getTime();
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
            alert('Waktu Habis');
            $('#form-kuis').submit();
        }
    }, 1000);
</script> -->
@endsection