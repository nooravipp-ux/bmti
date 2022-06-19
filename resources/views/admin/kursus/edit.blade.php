@extends('layouts.master')
@section('title', 'BMTI | DATA KURSUS')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Data Kursus') }}</h4>
                    <!-- <p class="card-description">
                    </p> -->
                    <form action="{{route('kursus.update', ['id'=>$data->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="jenis_kursus_id" class="form-label">Jenis Kursus</label>
                            <select type="text" name="jenis_kursus_id" class="form-control">
                                @foreach($jenis_kursus as $row)
                                <option value="{{$row->id}}">{{$row->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kategori_kursus_id" class="form-label">Kategori Kursus</label>
                            <select type="text" name="kategori_kursus_id" class="form-control">
                                @foreach($kategori_kursus as $row)
                                <option value="{{$row->id}}">{{$row->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="author_id" class="form-label">Author ID</label>
                            <input type="number" name="author_id" class="form-control" id="author_id"
                                aria-describedby="emailHelp" value="{{$data->author_id}}">
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul" aria-describedby="emailHelp"
                                value="{{$data->judul}}">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                                aria-describedby="emailHelp" value="{{$data->deskripsi}}">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="gambar"
                                aria-describedby="emailHelp">
                        </div>
                        <button type="Perbaharui" class="btn btn-primary btn-sm btn-rounded">Submit</button>
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