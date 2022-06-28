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
            <div class="quiz mt-4">
                <p>1. Gambar berikut merupakan koordinat dari penggambaran model 3D, koordinat yang dibedakan warnanya
                    (ditebalkan) adalah koordinat....</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault">XY</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault">XZ</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault">ZY</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault">ZX</label>
                </div>
                <div class="row justify-content-center text-center mt-3">
                    <button class="btn-quiz rounded-pill text-light font-weight-bold">Selesai</button>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="pembelajaran text-center bg-white">
                <span>Konten Pembelajaran</span>
            </div>
            <div class="content-pembelajaran">
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up"></i>
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
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up"></i>
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
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up"></i>
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
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up"></i>
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
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up"></i>
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
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up"></i>
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
                <div class="pembelajaran-2 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-angle-up"></i>
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
                <div class="pembelajaran text-center bg-white">
                    <span>Proses Pembelajaran</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection