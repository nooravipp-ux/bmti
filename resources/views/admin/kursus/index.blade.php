@extends('layouts.master')
@section('title', 'BMTI | DATA KURSUS')

@section('custom-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
@endsection
@section('content')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Data Kursus') }}</h4>
                    <!-- <p class="card-description">
                    </p> -->

                    <div class="table-responsive">
                        <table id="dataTable" class="table">
                            <thead>
                                <tr>
                                    <a href="{{route('kursus.create')}}"
                                        class="btn btn-primary btn-sm btn-rounded btn-icon-text">
                                        <i class="ti-upload btn-icon-prepend"></i>
                                        Create
                                    </a>
                                </tr>
                                <tr>
                                    <th>ID</th>
                                    <th>Jenis Kursus</th>
                                    <th>Kategori Kursus</th>
                                    <th>Author ID</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <!-- <th>Gambar</th> -->
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Manage</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->jenis_kursus}}</td>
                                    <td>{{$row->kategori_kursus}}</td>
                                    <td>{{$row->author_id}}</td>
                                    <td>{{$row->judul}}</td>
                                    <td>{{$row->deskripsi}}</td>
                                    <!-- <td>{{$row->gambar}}</td> -->
                                    <td>{{$row->created_at}}</td>
                                    <td>{{$row->updated_at}}</td>
                                    <td><a href="{{ route('kursus.edit', ['id'=>$row->id]) }}"
                                            class="btn btn-dark btn-sm btn-rounded btn-icon-prepend">Atur
                                            <i class="ti-reload btn-icon-append"></i></a></td>
                                    <td><a href="{{ route('kursus.delete', ['id'=>$row->id]) }}"
                                            onclick="return confirm('Apakah anda yakin ?')"
                                            class="btn btn-danger btn-sm btn-rounded btn-icon-text">Delete
                                            <i class="ti-trash btn-icon-append"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">

</script>
<script>
$(document).ready(function() {
    $('#dataTable').DataTable();

});
</script>
@endsection