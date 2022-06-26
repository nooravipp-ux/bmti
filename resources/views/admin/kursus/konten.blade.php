@extends('layouts.master')
@section('title', 'BMTI | Pelatihan')
@section('content')

@section('custom-css')
<style>
    .backdrop-modal {
        padding: 20px;
        position: absolute;
        top: 200px;
        width: 95%;
        right: 2%;
        height: auto;
        background-color: white;
        border: 1px solid #ddd;
        box-shadow: 0.2px 0.6px 0.5px 0.5px;
        z-index: 1;
    }

    .topik {
        padding-left: 30px;
        display: flex;
        color: #8D8D8D;
    }

    .pelatihan {
        display: flex;
    }

    .pelatihan i {
        float: inline-end;
    }

    .button-container {
        margin-top: 20px;
    }

    #modal-topik {
        position: fixed;
        left: 400px;
        min-width: 1000px;
    }

    .konten {
        padding-left: 30px;
    }

    .kuis {
        padding-left: 30px;
    }

    .btn-tambah-konten a {
        text-decoration: none;
    }
</style>
@endsection

<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-8 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Konten') }}</h4>
                    <!-- <p class="card-description">
                    </p> -->
                    <form id="form-informasi" action="{{route('pelatihan.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label for="judul" class="col-sm-3 col-form-label">Nama Konten</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul" class="form-control mt-2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="deskripsi" class="col-sm-3 col-form-label">Dekripsi Konten</label>
                            <div class="col-sm-9">
                                <textarea type="text" name="deskripsi" class="form-control mt-2" style="height: 100px;"></textarea>
                            </div>
                        </div>
                    </form>
                    <form id="form-materi-pembelajaran" action="{{route('pelatihan.store')}}" method="POST" class="d-none" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <textarea type="text" name="materi" class="ckeditor form-control" height="200"></textarea>
                            </div>
                        </div>
                    </form>
                    <form id="form-materi-pembelajaran" action="{{route('pelatihan.store')}}" method="POST" class="d-none" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label for="judul" class="col-sm-3 col-form-label">Waktu</label>
                            <div class="form-check col-sm-9">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <label for="judul" class="col-sm-3 col-form-label">Nilai Minimal</label>
                            <div class="form-check col-sm-9">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <label for="judul" class="col-sm-3 col-form-label">Mandatori</label>
                            <div class="form-check col-sm-9">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input pt-2">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <label for="judul" class="col-sm-3 col-form-label">Dapat Diulang</label>
                            <div class="form-check col-sm-9">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <label for="judul" class="col-sm-5 col-form-label">Pilih Kuis Yang Akan Digunakan :</label>
                            <div class="col-sm-8">
                                
                            </div>
                        </div>
                    </form>

                    <div class="row mb-3">
                        <div class="col-sm-12 text-right">
                            <button class="btn btn-danger btn-sm btn-rounded float-right ml-2">Batal</button>
                            <button id="btn-to-konten-lesson" class="btn btn-primary btn-sm btn-rounded float-right">Lanjutkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });

    $('#btn-to-konten-lesson').click(function() {
        $('#form-materi-pembelajaran').removeClass('d-none')
        $('#form-informasi').addClass('d-none')
    });

    $('#btn').click(function() {
        $('#form-materi-pembelajaran').removeClass('d-none')
        $('#form-informasi').addClass('d-none')
    });

</script>
@endsection