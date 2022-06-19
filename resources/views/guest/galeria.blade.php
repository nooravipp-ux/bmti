@extends('layouts.master_front')

@section('content')
<div class="galeria">
    <div class="container">
        <div class="row">
            <div class="col-12 text-galeria order-1">
                <h2>Ayo Belajar Mandiri !</h2>
                <h1>Galeria Kompetensi Keahlian</h1>
                <br />
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-7 text-galeria mt-0 order-3 order-xl-2">
                <p>Galeria merupakan kumpulan materi kejuruan dalam bentuk tulisan, video maupun animasi yang memberi informasi singkat tentang konten kejuruan. Galeria diharapkan dapat menjawab kebutuhan peningkatan kompetensi guru kejuruan, sekaligus menyediakan bahan ajar bagi guru kejuruan maupun non kejuruan, yang tertarik mempelajari materi pembelajaran secara singkat dan spesifik.</p>

                <div class="search-box mt-5">
                    <i class="fas fa-search" type="button"></i>
                    <input type="text" class="search-input" placeholder="Cari Kompetensi mu..." />
                </div>
            </div>

            <div class="col-12 col-xl-5 order-2">
                <div class="img-galeria text-center">
                    <image src="{{asset('guest/assets/images/pel-mandiri.png')}}" height="380px" width="380px" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="col-5 col-xl-3 logo-kemdikbud-galeria float-start">
                    <image src="{{asset('guest/assets/images/logo-kemdikbud.png')}}" width="70px" height="70px" />
                    <p class="col-6">Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi</p>
                </div>
                <div class="col-5 col-xl-9 logo-bmti-galeria float-start">
                    <image src="{{asset('guest/assets/images/logo-bmti.png')}}" width="70px" height="70px" />
                    <p class="col-6">BBPPMPV <br /> Bidang Mesin dan Teknik Industri</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="galeria-kompetisi text-center">
            <h1>Galeria Kompetensi Keahlian</h1>
            <p>Pilih kompetensi keahlian, kemudian simak materi pembelajaran yang disampaikan secara singkat.</p>
        </div>

        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-1.jpg" alt="Bricks" width="360px" height="250px" />
                <Link href="/galeria/teknik-permesinan">
                <div class="image-text">
                    <h4 class="col-11">Teknik Pemesinan</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan teknik pemesinan.</p>
                </div>
                </Link>
            </div>
        </div>

        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-2.jpg" alt="Bricks" width="460px" height="320px" />
                <Link href="#">
                <div class="image-text">
                    <h4 class="col-11">Teknik Kendaraan Ringan Otomotif</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan teknik kendaraaan ringan otomotif.</p>
                </div>
                </Link>
            </div>
        </div>

        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-3.jpg" alt="Bricks" width="460px" height="320px" />
                <Link href="#">
                <div class="image-text">
                    <h4 class="col-11">Teknik Bisnis Sepeda Motor</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan teknik bisnis sepeda motor.</p>
                </div>
                </Link>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-4.jpg" alt="Bricks" width="460px" height="320px" />
                <Link href="#">
                <div class="image-text">
                    <h4 class="col-11">Rekayasa Perangkat Lunak</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan rekayasa perangkat lunak.</p>
                </div>
                </Link>
            </div>
        </div>

        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-5.jpg" alt="Bricks" width="460px" height="320px" />
                <Link href="#">
                <div class="image-text">
                    <h4 class="col-11">Multimedia</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan multimedia.</p>
                </div>
                </Link>
            </div>
        </div>

        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-6.jpg" alt="Bricks" width="460px" height="320px" />
                <Link href="#">
                <div class="image-text">
                    <h4 class="col-11">Teknik Komputer dan Jaringan</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan teknik komputer dan jaringan.</p>
                </div>
                </Link>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-7.jpg" alt="Bricks" width="460px" height="320px" />
                <Link href="#">
                <div class="image-text">
                    <h4 class="col-11">Desain Pemodelan dan Informasi Bangunan</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan Desain Pemodelan dan Informasi Bangunan.</p>
                </div>
                </Link>
            </div>
        </div>

        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-8.jpg" alt="Bricks" width="460px" height="320px" />
                <Link href="#">
                <div class="image-text">
                    <h4 class="col-11">Geomatika</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan geomatika.</p>
                </div>
                </Link>
            </div>
        </div>

        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-9.jpg" alt="Bricks" width="460px" height="320px" />
                <Link href="#">
                <div class="image-text">
                    <h4 class="col-11">Bisnis Konstruksi dan Properti</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan Bisnis Konstruksi dan Properti.</p>
                </div>
                </Link>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-10.jpg" alt="Bricks" width="460px" height="320px" />
                <Link href="#">
                <div class="image-text">
                    <h4 class="col-11">Teknik Ketenagalistrikan</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan Teknik ketenagalistrikan.</p>
                </div>
                </Link>
            </div>
        </div>

        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-11.jpg" alt="Bricks" width="460px" height="320px" />
                <Link href="#">
                <div class="image-text">
                    <h4 class="col-11">Teknik Energi Biomassa</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan teknik energi biomassa.</p>
                </div>
                </Link>
            </div>
        </div>

        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-12.jpg" alt="Bricks" width="460px" height="320px" />
                <Link href="#">
                <div class="image-text">
                    <h4 class="col-11">Teknik Energi Surya Hidro Angin</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan teknik energi surya hidro angin.</p>
                </div>
                </Link>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-13.jpg" alt="Bricks" width="460px" height="320px" />
                <Link href="#">
                <div class="image-text">
                    <h4 class="col-11">Bahasa Inggris</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan Teknik ketenagalistrikan bahasa inggris teknologi rekayasa.</p>
                </div>
                </Link>
            </div>
        </div>

        <div class="col-12 col-md-4 col-xl-4">
            <div class="image shadow mt-5">
                <image src="/images/galeria-14.jpg" alt="Bricks" width="460px" height="320px" />
                <Link href="#">
                <div class="image-text">
                    <h4 class="col-11">Produk Kreatif dan Kewirausahaan</h4>
                    <p class="col-11">Pelatihan ini berhubungan dengan pengetahuan, keterampilan produk kreatif dan kewirausahaan.</p>
                </div>
                </Link>
            </div>
        </div>
    </div>
</div>
@endsection