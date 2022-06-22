@extends('layouts.master')
@section('title', 'BMTI | MASTER DATA TESTIMONI')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Data Master Testimoni') }}</h4>
                    <!-- <p class="card-description">
                    </p> -->
                    <form action="{{route('testimoni.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah">
                        </div>
                        <div class="mb-3">
                            <label for="nama_diklat" class="form-label">Nama Diklat</label>
                            <input type="text" name="nama_diklat" class="form-control" id="nama_diklat">
                        </div>
                        <div class="mb-3">
                            <label for="testimoni" class="form-label">Testimoni</label>
                            <textarea type="text" name="testimoni" class="ckeditor form-control" height="200"
                                id="testimoni"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="created_by" class="form-label">Created By</label>
                            <input type="text" name="created_by" class="form-control" id="created_by">
                        </div>
                        <div class="mb-3">
                            <label for="updated_by" class="form-label">Updated By</label>
                            <input type="text" name="updated_by" class="form-control" id="updated_by">
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