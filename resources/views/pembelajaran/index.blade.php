@extends('layouts.master-pembelajaran')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-end mt-4">
        <div class="col-7">
            <h1>Pengantar <button class="btn btn-danger rounded-pill">Selesai</button></h1>
        </div>
        
    </div>
    <div class="row justify-content-center mt-1 mb-5">
        <div id="1" class="col-7">
            <p>Data Pokok Dikdasmen Tahun Ajaran 2019-2020 mencatat ada lebih dari 2,7 juta Guru yang tersebar disetiap jenjang Pendidikan termasuk diantaranya lebih dari tiga ratus ribu Guru SMK yang tersebar di seluruh Propinsi se Indonesia. BBPPMPV BMTI sebagai Unit Pelaksana Teknis di bawah Ditjen Vokasi yang salah satu fungsinya melaksanakan peningkatan kompetensi guru Kejuruan, perlu mengatur strategi agar dapat melaksanakan tugas sesuai tuntutan. Sebagai UPT Kemdikbud, BBPPMPV BMTI memiliki kapasitas pelatihan tatap muka yang terbatas, yang berarti jumlah guru yang dapat mengikuti diklat tatap muka setiap tahunnya pun terbatas.
            <p>Di sisi lain, tingginya keinginan guru dan siswa, untuk dapat "merdeka belajar", di mana saja dan kapan saja, serta dengan siapa saja, merupakan tantangan yang harus dijawab oleh penyelenggara Pendidikan, termasuk oleh BBPPMPV BMTI. Pendidik maupun siswa di era milenial 4.0 dengan akses internet yang semakin mudah, justru membutuhkan bentuk pelatihan peningkatan kompetensi yang dapat mengakomodasi fleksibilitas dari segi waktu, akses, ruang, yang disesuaikan dengan waktu yang mereka miliki. Fakta lapangan ini dapat didefinisikan sebagai besarnya kebutuhan platform pembelajaran kejuruan yang fleksibel berbasis digital di era Revolusi Industri 4.0.
            <p>Bidang Keahlian Teknologi dan Rekayasa sebagai bidang Garapan utama BBPPMPV BMTI merupakan bidang yang kompleks dengan karakteristik yang berbeda-beda untuk setiap Kompetensi Keahliannya. Kondisi ini pun adalah dinamika yang harus difahami oleh Pengembang Teknologi Pembelajaran di BBPPMPV sebagai lnstructional Designer. PTP di BBPPMPV diharapkan dapat merumuskan berbagai model dan media pembelajaran yang sesuai dengan setiap Kompetensi Keahlian yang ada di Satkernya.
            <p>Jawaban kebutuhan pelatihan kejuruan oleh BBPPMPV BMTI dirumuskan dalam platform yang dinamai Galeri Kejuruan. Filosofi "merdeka belajar" bagi BBPPMPV BMTI dapat ditinjau dari beberapa sisi, bagi seorang pendidik atau siswa yang menginginkan peningkatan kompetensi pada platform pembelajaran kejuruan ini, yang dijabarkan dalam garis besar pengembangan Galeri Kejuruan, salah satunya adalah PELATIHAN MANDIRI. Pelatihan Mandiri pada Galeri Kejuruan adalah sarana pembelajaran berbasis web yang dapat dimanfaatkan oleh guru dalam meningkatkan kompetensinya. Sumber belajar ini dibuat secara terbuka, mudah akses, dan diharapkan dapat menjadi alternatif sarana belajar sesuai kompetensi yang diampu. Peserta dapat mengalokasikan waktunya secara mandiri, memilih pelatihan yang sesuai dengan minatnya. Peserta dapat mengakses berbagai media sebagai bahan belajar, dan menempuh tes atau kuis sesuai dengan Pelatihan yang dipilih.
            </p>
        </div>
        <div id="2" class="col-1 d-none">
            <p>aku</p>
        </div>
        <div class="col-4">
        <button onclick="onClickOpen()">next</button>
        </div>
    </div>
</div>

<script>
    function onClickOpen() {
        $('#1').attr('class', '');
        $('#2').attr('class', '');
    }
</script>
@endsection