@extends('layouts.master-pembelajaran')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-12 col-lg-7 col-xl-7 materi-pembelajaran">
            @if($data->materi)
            <p class="mt-3">
                {!!$data->materi!!}
            </p>
            @endif
            @if($data->file)
            $file_url = asset('files/file_konten/'.$data->file);
            echo $file_url;
            <iframe
                src='https://view.officeapps.live.com/op/embed.aspx?src=localhost:8000/files/file_konten/1657017537_Doc Guide (Workflow Setting) .pptx'
                width='740px' height='623px' frameborder='0'>This is an embedded <a target='_blank'
                    href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank'
                    href='http://office.com/webapps'>Office Online</a>.</iframe>
            @endif
        </div>

        <div class="col-12 col-lg-2 col-xl-2">
            <div class="row justify-content-end">
                <div class="col-lg-12 col-xl-7">
                    <div class="button-hidden">
                        <img src="{{asset('guest/assets/images/collapse-right.png')}}" id="icon-pembelajaran"
                            style="width=20px; height:20px;" onclick="myFunction()" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="content-pembelajaran" class="col-12 content-pembelajaran">
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
                                <a href="{{route('pembelajaran.topik',['id' => $pelatihan->id, 'topikId' => $tp->id])}}"
                                    style="text-decoration: none;"><span>{{$tp->judul}}</span></a>
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
                            <div class="col-1">
                                <i class="fa-solid fa-circle-check"></i>
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
                            <div class="col-1"></div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                    <div class="pembelajaran-bar text-center bg-white">
                        <p class="mt-4">Proses Pembelajaran</p>
                        <figure class="highcharts-figure">
                            <div id="bar" style="height: 250px; margin:auto;"></div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 next-pembelajaran text-center">
            <p>Topik Selanjutnya : <a href="" style="text-decoration:none;"><span>Tes Awal</span></a></p>
        </div>
    </div>
</div>
@endsection
@section('script')
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
    if (document.getElementById("icon-pembelajaran").src ==
        "{{asset('guest/assets/images/collapse-right.png')}}") {
        document.getElementById("icon-pembelajaran").src = "{{asset('guest/assets/images/collapse-left.png')}}";
    } else {
        document.getElementById("icon-pembelajaran").src =
            "{{asset('guest/assets/images/collapse-right.png')}}";
    }
    var x = document.getElementById("content-pembelajaran");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
@endsection