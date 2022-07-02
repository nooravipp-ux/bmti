@extends('layouts.master_front') @section('content')
<div class="alur-pembelajaran">
    <div class="container">
        <div class="row">
            <div class="col-12 road-map text-center">
                <div id="step1" class="">
                    <div class="text1">Alur Pembelajaran</div>

                    <div class="alur-start text-center">
                        <button type="button" class="tablinks myButton" onclick="step1OnClick()">Mulai</button>
                    </div>
                </div>
                <div id="step2" class="d-none">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-6 mb-3 mt-1">
                            <img class="alur-img center rounded" src="{{asset('guest/assets/images/list-galeria.PNG')}}"
                                alt="" width="550" height="330" />
                        </div>

                        <div class="col-12 col-lg-6 col-xl-6">
                            <h3 class="text-light"><b>STEP 1 - GALERIA</b></h3>
                            <h3 class="text-light">Galeria merupakan kumpulan materi kejuruan dalam bentuk tulisan,
                                video maupun animasi yang memberi informasi singkat tentang konten kejuruan.</h3>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="tablinks myButton1 center" onclick="step2OnClick()"><b>Next Step</b> - Kompetensi
                            Kejuruan</button>
                    </div>
                </div>

                <div id="step3" class="d-none">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <img class="alur-img center rounded"
                                src="{{asset('guest/assets/images/kompetensi-kejuruan.PNG')}}" alt="" width="550"
                                height="330" />
                        </div>

                        <div class="col-12 col-lg-6 col-xl-6">
                            <h3 class="text-light"><b>STEP 2 - KOMPETENSI KEJURUAN</b></h3>
                            <h3 class="text-light">Menyajikan deskripsi materi pembelajaran dengan: H5P, video shooting
                                merekam gambar bergerak, animasi seolah bergerak yang disajikan dengan citra/sudut
                                pandang 2 dimensi maupun 3 dimensi serta dilengkapi materi pendukung berformat
                                pdf.
                            </h3>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="tablinks myButton1 center" onclick="step3OnClick()"><b>Next Step</b> -
                            Materi</button>
                    </div>
                </div>

                <div id="step4" class="d-none">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <img class="alur-img center rounded" src="{{asset('guest/assets/images/kk-materi.PNG')}}"
                                alt="" width="550" height="330" />
                        </div>

                        <div class="col-12 col-lg-6 col-xl-6">
                            <h3 class="text-light"><b>STEP 3 - MATERI</b></h3>
                            <h3 class="text-light">Materi kejuruan berisikan materi - materi yang akan digunakan untuk
                                pembelajaran di galeri kejuruan.</h3>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="tablinks myButton1 center" onclick="step4OnClick()"><b>Next Step</b> -
                            Minat?</button>
                    </div>
                </div>

                <div id="step5" class="d-none">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <img class="alur-img center rounded" src="{{asset('guest/assets/images/gambar-minat.PNG')}}"
                                alt="" width="550" height="330" />
                        </div>

                        <div class="col-12 col-lg-6 col-xl-6">
                            <h3 class="text-light"><b>STEP 4 - MINAT</b></h3>
                            <h3 class="text-light">Pilih minat berdasarkan kebutuhan anda.</h3>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="tablinks myButton1" onclick="onClickPelatihanMandiri()"><b>Pilih</b> - Pelatihan
                            Mandiri</button>
                        <button class="tablinks myButton1" onclick="onClickPelatihanTerbimbing()"><b>Pilih</b> - Diklat
                            Terbimbing</button>
                    </div>
                </div>

                <div id="step6" class="d-none">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <img class="alur-img center rounded"
                                src="{{asset('guest/assets/images/list-pelatihan-mandiri.PNG')}}" alt="" width="550"
                                height="330" />
                        </div>

                        <div class="col-12 col-lg-6 col-xl-6">
                            <h3 class="text-light"><b>STEP 5 - PELATIHAN MANDIRI</b></h3>
                            <h3 class="text-light">Pelatihan Mandiri adalah fasilitas yang diberikan kepada guru untuk
                                melakukan latihan kompetensi keahlian sesuai pilihannya, yang dilaksanakan secara
                                mandiri. Pelatihan mandiri merupakan bagian dari galeri kejuruan.</h3>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="tablinks myButton1 center" onclick="onClickSertifikat()"><b>Next Step</b> -
                            Sertifikat</button>
                    </div>
                </div>

                <div id="step7" class="d-none">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <img class="alur-img center rounded"
                                src="{{asset('guest/assets/images/gambar-terbimbing.PNG')}}" alt="" width="550"
                                height="330" />
                        </div>

                        <div class="col-12 col-lg-6 col-xl-6">
                            <h3 class="text-light"><b>STEP 6 - DIKLAT TERBIMBING</b></h3>
                            <h3 class="text-light">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                PageMaker including versions of Lorem Ipsum.s</h3>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="tablinks myButton1 center" onclick="onClickSertifikat()"><b>Next Step</b> -
                            Sertifikat</button>
                    </div>
                </div>

                <div id="step8" class="d-none">
                    <div class="row justify-items-center">
                        <div class="col-12">
                            <h3 class="text-light"><b>STEP 7 - SERTIFIKAT</b></h3>
                            <div class="mb-3">
                                <img class="sertifikat-img center rounded"
                                    src="{{asset('guest/assets/images/sertifikat2.PNG')}}" alt="" width="500"
                                    height="550" />
                            </div>
                            <h3 class="text-light">
                                Setelah peserta menyelesaikan pelatihan terbimbing, maka peserta akan mendapatkan
                                sertifikat sesuai dengan pelatihan yang sudah diambil.
                            </h3>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="open-button tablinks myButton1" onclick="onClickAlur()">Lihat Alur
                            Pembelajaran</button> &nbsp;&nbsp;&nbsp;
                        <button class="tablinks myButton1" onclick="onClickKembaliKeawal()">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="alur" class="d-none">
    <div class="d-flex bg-alur">
        <div class="col-12">
            <div class="img-alur">
                <img class="rounded" src="{{asset('guest/assets/images/alur.png')}}" alt="" width="1300" height="600" />
            </div>
            <div class="btn-closeAlur">
                <button class="btn btn-danger btn-sm btn-circle" onclick="onClickCloseAlur()">X</button>
            </div>
        </div>
    </div>
</div>
@endsection @section('script')
<script>
function step1OnClick() {
    $('#step1').addClass('d-none');
    $('#step2').attr('class', '');
}

function step2OnClick() {
    $('#step2').addClass('d-none');
    $('#step3').attr('class', '');
}

function step3OnClick() {
    $('#step3').addClass('d-none');
    $('#step4').attr('class', '');
}

function step4OnClick() {
    $('#step4').addClass('d-none');
    $('#step5').attr('class', '');
}

function step5OnClick() {
    $('#step1').addClass('d-none');
    $('#step2').attr('class', '');
}

function onClickPelatihanMandiri() {
    $('#step5').addClass('d-none');
    $('#step6').attr('class', '');
}

function onClickPelatihanTerbimbing() {
    $('#step5').addClass('d-none');
    $('#step7').attr('class', '');
}

function onClickSertifikat() {
    $('#step6').addClass('d-none');
    $('#step7').addClass('d-none');
    $('#step8').attr('class', '');
}

function onClickKembaliKeawal() {
    $('#step1').attr('class', '');
    $('#step8').addClass('d-none');
}

function onClickAlur() {
    $('#alur').attr('class', '');
}

function onClickCloseAlur() {
    $('#alur').addClass('d-none');
}
</script>
@endsection