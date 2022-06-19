@extends('layouts.master_front')

@section('content')
<div class="alur-pembelajaran">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 road-map text-center">
                <div id="step1" class="d-none">
                    <div class="text1">Alur Pembelajaran</div>

                    <div class="alur-start text-center">
                        <button type="button" class="tablinks myButton">Mulai</button>
                    </div>
                </div>
                <div id="step2" class="d-none">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <image class="center rounded" src="{{asset('guest/assets/images/list-galeria.PNG')}}" alt="" width={600} height={350} />
                        </div>

                        <div class="col-md-6">
                            <h2><b>STEP 1 - GALERIA</b></h2>
                            <h2>Galeria merupakan kumpulan materi kejuruan dalam bentuk tulisan, video maupun animasi yang memberi informasi singkat tentang konten kejuruan.</h2>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="tablinks myButton1 center"><b>Next Step</b> - Kompetensi Kejuruan</button>
                    </div>
                </div>

                <div id="step3" class="d-none">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <image class="center rounded" src="{{asset('guest/assets/images/kompetensi-kejuruan.PNG')}}" alt="" width={600} height={350} />
                        </div>

                        <div class="col-md-6">
                            <h2><b>STEP 2 - KOMPETENSI KEJURUAN</b></h2>
                            <h2>Menyajikan deskripsi materi pembelajaran dengan: H5P, video shooting merekam gambar bergerak, animasi seolah bergerak yang disajikan dengan citra/sudut pandang 2 dimensi maupun 3 dimensi serta dilengkapi materi pendukung berformat pdf.</h2>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="tablinks myButton1 center"><b>Next Step</b> - Materi</button>
                    </div>
                </div>

                <div id="step4" class="d-none">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <image class="center rounded" src="{{asset('guest/assets/images/kk-materi.PNG')}}" alt="" width={600} height={350} />
                        </div>

                        <div class="col-md-6">
                            <h2><b>STEP 3 - MATERI</b></h2>
                            <h2>Materi kejuruan berisikan materi - materi yang akan digunakan untuk pembelajaran di galeri kejuruan.</h2>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="tablinks myButton1 center"><b>Next Step</b> - Minat?</button>
                    </div>
                </div>

                <div id="step5" class="d-none">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <image class="center rounded" src="{{asset('guest/assets/images/gambar-minat.PNG')}}" alt="" width={600} height={350} />
                        </div>

                        <div class="col-md-6">
                            <h2><b>STEP 4 - MINAT</b></h2>
                            <h2>Pilih minat berdasarkan kebutuhan anda.</h2>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="tablinks myButton1"><b>Pilih</b> - Pelatihan Mandiri</button>
                        &nbsp;&nbsp;&nbsp;
                        <button class="tablinks myButton1"><b>Pilih</b> - Diklat Terbimbing</button>
                    </div>
                </div>

                <div id="step6" class="d-none">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <image class="center rounded" src="{{asset('guest/assets/images/list-pelatihan-mandiri.PNG')}}" alt="" width={600} height={350} />
                        </div>

                        <div class="col-md-6">
                            <h2><b>STEP 5 - PELATIHAN MANDIRI</b></h2>
                            <h2>Pelatihan Mandiri adalah fasilitas yang diberikan kepada guru untuk melakukan latihan kompetensi keahlian sesuai pilihannya, yang dilaksanakan secara mandiri. Pelatihan mandiri merupakan bagian dari galeri kejuruan.</h2>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="tablinks myButton1 center"><b>Next Step</b> - Sertifikat</button>
                    </div>
                </div>

                <div id="step7" class="d-none">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <image class="center rounded" src="{{asset('guest/assets/images/gambar-terbimbing.PNG')}}" alt="" width={600} height={350} />
                        </div>

                        <div class="col-md-6">
                            <h2><b>STEP 6 - DIKLAT TERBIMBING</b></h2>
                            <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, PageMaker including versions of Lorem Ipsum.s</h2>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="tablinks myButton1 center" onClick={()=> {
                            setStep7Hidden(true)
                            setStep8Hidden(false)
                            }}><b>Next Step</b> - Sertifikat</button>
                    </div>
                </div>

                <div id="step8" class="d-none">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <image class="center rounded" src="{{asset('guest/assets/images/sertifikat2.PNG')}}" alt="" width={400} height={500} />
                        </div>

                        <div class="col-md-6">
                            <h2><b>STEP 7 - SERTIFIKAT</b></h2>
                            <h2>
                                Setelah peserta menyelesaikan pelatihan terbimbing, maka peserta akan mendapatkan sertifikat
                                sesuai dengan pelatihan yang sudah diambil.
                            </h2>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="open-button tablinks myButton1">Lihat Alur Pembelajaran</button>
                        &nbsp;&nbsp;&nbsp;
                        <button class="tablinks myButton1">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection