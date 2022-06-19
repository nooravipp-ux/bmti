@extends('layouts.master')
@section('title', 'BMTI | DATA KOMPETENSI')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Data Kompetensi') }}</h4>
                    <!-- <p class="card-description">
                    </p> -->
                    <form action="{{route('kompetensi.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="inputnama_kompetensi" class="form-label">Nama Kompetensi</label>
                            <input type="text" name="nama_kompetensi" class="form-control" id="inputnama_kompetensi"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="inputdeskripsi" class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" id="input_deskripsi"
                                aria-describedby="emailHelp">
                            <!-- <trix-editor input="body"></trix-editor> -->
                        </div>
                        <div class="mb-3">
                            <label for="inputgambar_banner" class="form-label">Gambar Banner</label>
                            <input type="file" name="gambar_banner" class="form-control" id="inputgambar_banner"
                                aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#dataTable').DataTable();

});
</script>
@endsection