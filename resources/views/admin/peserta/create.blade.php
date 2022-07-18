@extends('layouts.master')
@section('title', 'BMTI - Create Data Peserta')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Data Peserta') }}</h4>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('peserta.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nuptk" class="form-label">NUPTK</label>
                            <input type="text" name="nuptk" class="form-control" id="nuptk" aria-describedby="emailHelp"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" name="nik" class="form-control" id="nik" aria-describedby="emailHelp"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="nama_depan" class="form-label">Nama Depan</label>
                            <input type="text" name="nama_depan" class="form-control" id="nama_depan"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama_belakang" class="form-label">Nama Belakang</label>
                            <input type="text" name="nama_belakang" class="form-control" id="nama_belakang"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="desa_kelurahan" class="form-label">Desa / Kelurahan</label>
                            <input type="number" name="desa_kelurahan" class="form-control" id="desa_kelurahan"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <input type="number" name="kecamatan" class="form-control" id="kecamatan"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="kota_kab" class="form-label">Kota / Kabupaten</label>
                            <input type="number" name="kota_kab" class="form-control" id="kota_kab"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <input type="number" name="provinsi" class="form-control" id="provinsi"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_telepon" class="form-label">Nomer Telepon</label>
                            <input type="number" name="no_telepon" class="form-control" id="no_telepon"
                                aria-describedby="emailHelp" required>
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