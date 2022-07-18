@extends('layouts.master')
@section('title', 'BMTI - Edit Jenis Kegiatan')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Data Jenis Kegiatan') }}</h4>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('jenisKegiatan.update', ['id'=>$data->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="nama_jenis_kegiatan" class="form-label">Nama Jenis Kegiatan</label>
                            <input type="text" name="nama_jenis_kegiatan" class="form-control" id="nama_jenis_kegiatan"
                                value="{{ $data->nama_jenis_kegiatan }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="kode_jenis_kegiatan" class="form-label">Kode Jenis Kegiatan</label>
                            <input type="text" name="kode_jenis_kegiatan" class="form-control" id="kode_jenis_kegiatan"
                                value="{{ $data->kode_jenis_kegiatan }}" required>
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