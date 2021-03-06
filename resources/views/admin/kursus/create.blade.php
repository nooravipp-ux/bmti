@extends('layouts.master')
@section('title', 'BMTI - Create Data Pelatihan Mandiri')
@section('content')

<style>
    @media only screen and (min-width: 400px) and (max-width: 767px) {
    .marginResponsive {
        margin-top: 25px;
    }
}
</style>

<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-8 grid-margin marginResponsive">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Buat Pelatihan') }}</h4>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('pelatihan.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label for="judul" class="col-sm-3 col-form-label">Nama Pelatihan</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul" class="form-control mt-2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="deskripsi" class="col-sm-3 col-form-label">Dekripsi Pelatihan</label>
                            <div class="col-sm-9">
                                <textarea type="text" name="deskripsi" class="form-control mt-2"
                                    style="height: 100px;"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <label for="kategori_kursus_id" class="col-sm-3 col-form-label">Kel. Keahlian</label>
                            <div class="col-sm-9">
                                <select type="text" name="kelompok_keahlian_id" class="form-control mt-2">
                                    <option value="">-</option>
                                    @foreach($kategori_kursus as $row)
                                    <option value="{{$row->id}}">{{$row->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gambar" class="col-sm-3 col-form-label">Upload Gambar</label>
                            <div class="col-sm-9">
                                <input type="file" name="gambar" class="form-control mt-2"
                                    accept="image/jpg, image/jpeg, image/png">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 text-right">
                                <button class="btn btn-danger btn-sm btn-rounded float-right ml-2">Batal</button>
                                <button type="submit"
                                    class="btn btn-primary btn-sm btn-rounded float-right" style="margin-left:5px;">Lanjutkan</button>
                            </div>
                        </div>
                    </form>
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
</script>
@endsection