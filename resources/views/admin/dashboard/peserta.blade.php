@extends('layouts.master') @section('title', 'BMTI | DASHBOARD') @section('custom-css')
<style>
    /* Dashboard User */
    
    .cardPelatihan {
        width: 100%;
        height: 100%;
        font-family: "glory";
        overflow: hidden;
    }
    
    .cardPelatihan h5 {
        font-size: 16px;
        font-weight: 600;
    }
    
    .buttonPelatihan {
        height: 40px;
        width: 120px;
        font-weight: 600;
        font-family: "glory";
        color: white;
        border: 1px solid #00BF78;
        background-color: #53C7FF;
        border-radius: 10px;
    }
    
    .cardSertifikat {
        font-family: "glory";
        height: 100%;
        width: 100%;
        overflow: hidden;
    }
    
    .cardSertifikat h5 {
        font-weight: 600;
        font-size: 16px;
    }
    
    .textCardSertifikat {
        font-family: "glory";
        font-weight: 600;
        font-size: 12px;
        height: 240px;
        overflow: scroll;
        padding-right: 5px;
    }
    
    .textCardSertifikat::-webkit-scrollbar {
        width: 10px;
        height: 10px;
    }
    
    .textCardSertifikat::-webkit-scrollbar-thumb {
        border: 1px solid #9c9c9c;
        background: #c2c2c2;
        border-radius: 10px;
    }
    
    .textCardSertifikat::-webkit-scrollbar-thumb:hover {
        background: #9c9c9c;
    }
    
    .textCardSertifikat::-webkit-scrollbar-track {
        background: transparent;
    }
    
    .textCardSertifikat b {
        cursor: pointer;
        color: #53C7FF;
    }
    
    .cardKursus {
        font-family: "glory";
        height: 100%;
        width: 100%;
        overflow: hidden;
    }
    
    .cardKursus h5 {
        font-weight: 600;
        font-size: 16px;
    }
    
    .textCardKursus {
        font-weight: 600;
        font-size: 12px;
        height: 280px;
        overflow: scroll;
        padding-right: 5px;
    }
    
    .textCardKursus::-webkit-scrollbar {
        width: 10px;
        height: 10px;
    }
    
    .textCardKursus::-webkit-scrollbar-thumb {
        border: 1px solid #9c9c9c;
        background: #c2c2c2;
        border-radius: 10px;
    }
    
    .textCardKursus::-webkit-scrollbar-thumb:hover {
        background: #9c9c9c;
    }
    
    .textCardKursus::-webkit-scrollbar-track {
        background: transparent;
    }
    
    .textCardKursus span {
        margin-bottom: -10px;
    }
    
    .cardAktifitas {
        font-family: "glory";
        height: 100%;
        width: 100%;
        overflow: hidden;
    }
    
    .cardAktifitas span {
        font-weight: 600;
        font-size: 12px;
    }
    
    .cardAktifitas h5 {
        font-weight: 600;
        font-size: 16px;
    }
    
    .cardAktifitas i {
        color: #8F8F8F;
        padding: 4px;
    }
    
    .scrollCardAktifitas {
        overflow: scroll;
        height: 280px;
        padding-right: 5px;
    }
    
    .scrollCardAktifitas::-webkit-scrollbar {
        width: 10px;
        height: 10px;
    }
    
    .scrollCardAktifitas::-webkit-scrollbar-thumb {
        border: 1px solid #9c9c9c;
        background: #c2c2c2;
        border-radius: 10px;
    }
    
    .scrollCardAktifitas::-webkit-scrollbar-thumb:hover {
        background: #9c9c9c;
    }
    
    .scrollCardAktifitas::-webkit-scrollbar-track {
        background: transparent;
    }
    
    .cardDiklat {
        font-family: "glory";
        font-size: 12px;
        font-weight: 600;
        height: 260px;
        width: 100%;
        overflow: hidden;
    }
    
    .cardDiklat h5 {
        font-weight: 600;
        font-size: 16px;
    }
    
    .cardDiklat i {
        padding-top: 5px;
        height: 20px;
        width: 20px;
        text-align: center;
        background-color: #1492E6;
        font-size: 10px;
        color: white;
        cursor: pointer;
    }
    
    .tablePeserta {
        overflow: scroll;
        height: 230px;
        padding-right: 5px;
    }
    
    .tablePeserta::-webkit-scrollbar {
        margin: 10px;
        width: 10px;
        height: 10px;
    }
    
    .tablePeserta::-webkit-scrollbar-thumb {
        border: 1px solid #9c9c9c;
        background: #c2c2c2;
        border-radius: 10px;
    }
    
    .tablePeserta::-webkit-scrollbar-thumb:hover {
        background: #9c9c9c;
    }
    
    .tablePeserta::-webkit-scrollbar-track {
        background: transparent;
    }
    
    .cardStatistikKehadiran {
        font-size: 12px;
        font-weight: 600;
        font-family: "glory";
        height: 260px;
        width: 100%;
        overflow: hidden;
    }
    
    .cardStatistikKehadiran h5 {
        font-size: 16px;
        font-weight: 600;
    }
    
    .cardStatistikKehadiran i {
        margin-right: 10px;
    }
    
    .chartStatistikKehadiran {
        margin-left: auto;
        margin-right: auto;
    }
    
    .filter button {
        margin-left: 10px;
    }
    /* End Dashboard User */
    
    @media only screen and (min-width: 500px) and (max-width: 575px) {
        .bgDashboard {
            background: none;
            width: 100%;
            height: 100%;
        }
        .bgDashboard:hover {
            width: 100%;
        }
        .logoDashboard hr {
            display: none;
        }
        .logoDashboard {
            margin-left: 10px;
        }
        .iconDashboard {
            display: none;
        }
        .textDashboard {
            margin-top: -35px;
            text-align: center;
        }
        .textDashboard h4 {
            font-size: 30px;
        }
        .akunButtonDashboard {
            position: absolute;
            top: 35px;
            left: 72%;
        }
        .menuDashboard {
            position: absolute;
            top: 20px;
            left: 93%;
        }
        .marginCard {
            margin-bottom: 20px;
        }
        .cardRasioSiswa {
            height: 360px;
        }
        .cardRasioGuru {
            height: 360px;
        }
        .cardPelatihanSelesai {
            margin: 0;
        }
    }
    
    @media only screen and (min-width: 576px) and (max-width: 767px) {
        .bgDashboard {
            background: none;
            width: 100%;
            height: 100%;
        }
        .bgDashboard:hover {
            width: 100%;
        }
        .logoDashboard hr {
            display: none;
        }
        .logoDashboard {
            margin-left: 10px;
        }
        .iconDashboard {
            display: none;
        }
        .textDashboard {
            margin-top: -35px;
            text-align: center;
        }
        .textDashboard h4 {
            font-size: 30px;
        }
        .akunButtonDashboard {
            position: absolute;
            top: 35px;
            left: 74%;
        }
        .menuDashboard {
            position: absolute;
            top: 20px;
            left: 93%;
        }
        .marginCard {
            margin-bottom: 20px;
        }
        .cardRasioSiswa {
            height: 340px;
        }
        .cardRasioGuru {
            height: 340px;
        }
        .cardPelatihanSelesai {
            margin: 0;
        }
    }
    
    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .bgDashboard {
            background: none;
            width: 100%;
            height: 100%;
        }
        .bgDashboard:hover {
            width: 100%;
        }
        .logoDashboard hr {
            display: none;
        }
        .logoDashboard {
            margin-left: 10px;
        }
        .iconDashboard {
            display: none;
        }
        .textDashboard {
            margin-top: -35px;
            text-align: center;
        }
        .textDashboard h4 {
            font-size: 30px;
        }
        .akunButtonDashboard {
            position: absolute;
            top: 35px;
            left: 80%;
        }
        .menuDashboard {
            position: absolute;
            top: 20px;
            left: 95%;
        }
        .marginCard {
            margin-bottom: 20px;
        }
        .textCardSertifikat {
            height: 285px;
        }
        .textCardKursus {
            height: 280px;
        }
        .cardRasioSiswa {
            height: 250px;
        }
        .cardRasioGuru {
            height: 250px;
        }
    }
    
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .bgDashboard {
            background: none;
            width: 100%;
            height: 100%;
        }
        .bgDashboard:hover {
            width: 100%;
        }
        .logoDashboard hr {
            display: none;
        }
        .logoDashboard {
            margin-left: 10px;
        }
        .iconDashboard {
            display: none;
        }
        .textDashboard {
            margin-top: -35px;
            text-align: center;
        }
        .textDashboard h4 {
            font-size: 30px;
        }
        .akunButtonDashboard {
            position: absolute;
            top: 35px;
            left: 85%;
        }
        .menuDashboard {
            position: absolute;
            top: 20px;
            left: 96%;
        }
        .marginCard {
            margin-bottom: 20px;
        }
        .marginCardSiswa {
            margin-top: 0px;
        }
    }
    /* End Dashboard */
    /* End Responsive */
</style>
<script src="{{asset('admin/vendors/highchart/code/highcharts.js')}}"></script>
<script src="{{asset('admin/vendors/highchart/code/highcharts-3d.js')}}"></script>
<script src="https://code.highcharts.com/modules/variable-pie.js"></script>
@endsection @section('content')
<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-3 col-xl-6">
            <div class="marginCard">
                <div class="shadow p-3 bg-white rounded text-center h-100">
                    <div class="cardPelatihan">
                        <h5 class="text-center">Pelatihan Berjalan</h5>
                        <div class="filter mb-2 font-weight-normal">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>TKR001 - Pemeliharaan Kelistrikan Motor</option>
                                <option value="1">TKR001 - Pemeliharaan Kelistrikan Motor</option>
                                <option value="2">TKR001 - Pemeliharaan Kelistrikan Motor</option>
                                <option value="3">TKR001 - Pemeliharaan Kelistrikan Motor</option>
                            </select>
                        </div>
                        <figure class="highcharts-figure">
                            <div id="chartD" style="height: 175px; width: 300px margin:auto"></div>
                        </figure>
                        <div class="button text-center pt-2">
                            <button class="buttonPelatihan">Lanjutkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 col-xl-6">
            <div class="marginCard">
                <div class="shadow p-3 bg-white rounded h-100">
                    <div class="cardSertifikat">
                        <h5 class="text-center">Sertifikat Pelatihan</h5>
                        <div class="filter mb-1">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>DKLT01 - Pemeliharaan Kelistrikan Motor</option>
                                <option value="1">DKLT02 - Pemeliharaan Kelistrikan Motor</option>
                                <option value="2">DKLT03 - Pemeliharaan Kelistrikan Motor</option>
                                <option value="3">DKLT04 - Pemeliharaan Kelistrikan Motor</option>
                            </select>
                        </div>
                        <div class="textCardSertifikat" }>
                            <div class="d-flex flex-column">
                                <div class="list-content shadow mb-2 bg-white rounded">
                                    <span class="p-2"></span>
                                    <div class="d-flex justify-content-between p-2">
                                        <span></span>
                                        <Link href="/"><b> &#62;&#62;&#62;</b></Link>
                                    </div>
                                </div>
                                <div class="list-content shadow mb-2 bg-white rounded">
                                    <span class="p-2"></span>
                                    <div class="d-flex justify-content-between p-2">
                                        <span></span>
                                        <Link href="/"><b> &#62;&#62;&#62;</b></Link>
                                    </div>
                                </div>
                                <div class="list-content shadow mb-2 bg-white rounded">
                                    <span class="p-2"></span>
                                    <div class="d-flex justify-content-between p-2">
                                        <span></span>
                                        <Link href="/"><b> &#62;&#62;&#62;</b></Link>
                                    </div>
                                </div>
                                <div class="list-content shadow mb-2 bg-white rounded">
                                    <span class="p-2"></span>
                                    <div class="d-flex justify-content-between p-2">
                                        <span></span>
                                        <Link href="/"><b> &#62;&#62;&#62;</b></Link>
                                    </div>
                                </div>
                                <div class="list-content shadow mb-2 bg-white rounded">
                                    <span class="p-2"></span>
                                    <div class="d-flex justify-content-between p-2">
                                        <span></span>
                                        <Link href="/"><b> &#62;&#62;&#62;</b></Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-12 col-md-6 col-lg-3 col-xl-6">
            <div class="marginCard">
                <div class="shadow p-3 bg-white rounded h-100">
                    <div class="cardKursus">
                        <h5 class="text-center">Statistik Kursus</h5>
                        <div class="textCardKursus">
                            <div class="d-flex flex-column">
                                <div class="list-content shadow mb-2 bg-white rounded">
                                    <div class="d-flex justify-content-between p-2">
                                        <span>Hari Ini</span>
                                        <span></span>
                                    </div>
                                    <div class="p-1">
                                        <progress class="p-2 w-100" value="30" max="100"></progress>
                                    </div>
                                </div>
                                <div class="list-content shadow mb-2 bg-white rounded">
                                    <div class="d-flex justify-content-between p-2">
                                        <span>Minggu Ini</span>
                                        <span></span>
                                    </div>
                                    <div class="p-1">
                                        <progress class="p-2 w-100" value="25" max="100"></progress>
                                    </div>
                                </div>
                                <div class="list-content shadow mb-2 bg-white rounded">
                                    <div class="d-flex justify-content-between p-2">
                                        <span>Bulan Ini</span>
                                        <span></span>
                                    </div>
                                    <div class="p-1">
                                        <progress class="p-2 w-100" value="40" max="100"></progress>
                                    </div>
                                </div>
                                <div class="list-content shadow mb-2 bg-white rounded">
                                    <div class="d-flex justify-content-between p-2">
                                        <span>Tersisa</span>
                                        <span></span>
                                    </div>
                                    <div class="p-1">
                                        <progress class="p-2 w-100" value="30" max="100"></progress>
                                    </div>
                                </div>
                                <div class="list-content shadow mb-2 bg-white rounded">
                                    <div class="d-flex justify-content-between p-2">
                                        <span>Tersisa</span>
                                        <span></span>
                                    </div>
                                    <div class="p-1">
                                        <progress class="p-2 w-100" value="30" max="100"></progress>
                                    </div>
                                </div>
                                <div class="list-content shadow mb-2 bg-white rounded">
                                    <div class="d-flex justify-content-between p-2">
                                        <span>Tersisa</span>
                                        <span></span>
                                    </div>
                                    <div class="p-1">
                                        <progress class="p-2 w-100" value="30" max="100"></progress>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 col-xl-6">
            <div class="shadow p-3 bg-white rounded h-100">
                <div class="cardAktifitas">
                    <h5 class="text-center">Aktifitas Masuk</h5>
                    <div class="scrollCardAktifitas">
                        <div class="d-flex flex-column">
                            <div class="list-content shadow mb-2 bg-white rounded">
                                <div class="d-flex justify-content-between p-2">
                                    <span>Waktu Masuk</span>
                                    <span><i class="fa-solid fa-clock"></i>&nbsp;</span>
                                </div>
                            </div>
                            <div class="list-content shadow mb-2 bg-white rounded">
                                <div class="d-flex justify-content-between p-2">
                                    <span>Waktu Keluar</span>
                                    <span><i class="fa-solid fa-clock"></i>&nbsp;</span>
                                </div>
                            </div>
                            <div class="list-content shadow mb-2 bg-white rounded">
                                <div class="d-flex justify-content-between p-2">
                                    <span>Waktu Masuk</span>
                                    <span><i class="fa-solid fa-clock"></i>&nbsp;</span>
                                </div>
                            </div>
                            <div class="list-content shadow mb-2 bg-white rounded">
                                <div class="d-flex justify-content-between p-2">
                                    <span>Waktu Keluar</span>
                                    <span><i class="fa-solid fa-clock"></i>&nbsp;</span>
                                </div>
                            </div>
                            <div class="list-content shadow mb-2 bg-white rounded">
                                <div class="d-flex justify-content-between p-2">
                                    <span>Waktu Masuk</span>
                                    <span><i class="fa-solid fa-clock"></i>&nbsp;</span>
                                </div>
                            </div>
                            <div class="list-content shadow mb-2 bg-white rounded">
                                <div class="d-flex justify-content-between p-2">
                                    <span>Waktu Keluar</span>
                                    <span><i class="fa-solid fa-clock"></i>&nbsp;</span>
                                </div>
                            </div>
                            <div class="list-content shadow mb-2 bg-white rounded">
                                <div class="d-flex justify-content-between p-2">
                                    <span>Waktu Masuk</span>
                                    <span><i class="fa-solid fa-clock"></i>&nbsp;</span>
                                </div>
                            </div>
                            <div class="list-content shadow mb-2 bg-white rounded">
                                <div class="d-flex justify-content-between p-2">
                                    <span>Waktu Masuk</span>
                                    <span><i class="fa-solid fa-clock"></i>&nbsp;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
            <div class="marginCard">
                <div class="shadow p-3 bg-white rounded h-100">
                    <div class="cardDiklat">
                        <h5>Kegiatan Diklat Yang Telah Diikuti</h5>
                        <div class="tablePeserta">
                            <table class="table table-striped w-100 text-center ">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Diklat</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
            <div class="shadow p-3 bg-white rounded h-100">
                <div class="cardStatistikKehadiran">
                    <h5><i class="fa-solid fa-chart-simple"></i>Statistik Lama Waktu Kehadiran</h5>
                    <div class="d-flex justify-content-between">
                        <div class="date-text">2 Maret 2022</div>
                        <div class="filter">
                            <button class="btn btn-sm btn-primary">Bulan</button>
                            <button class="btn btn-sm btn-primary">Tahun</button>
                        </div>
                    </div>
                    <figure class="highcharts-figure">
                        <div id="chartD" style="height: 170px; width: 200px margin:auto"></div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection @section('script')
<script type="text/javascript">
    Highcharts.chart('chartD', {
        chart: {
            type: 'variablepie'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:14px font-style:glory">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0"> </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>'
        },
        series: [{
            innerSize: '40%',
            zMin: 0,
            data: [{
                name: 'Complete',
                color: '#FE7600',
                borderColor: '#FE7600',
                y: 70,
                z: 200
            }, {
                name: 'Non Complete',
                color: '#DDDDDD',
                borderColor: '#979797',
                y: 30,
                z: 200
            }]
        }]
    });
</script>
@endsection