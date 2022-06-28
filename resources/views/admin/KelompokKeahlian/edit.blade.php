@extends('layouts.master')
@section('title', 'BMTI | DATA JENIS KURSUS')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Kelompok Keahlian') }}</h4>
                    <!-- <p class="card-description">
                    </p> -->
                    <form action="{{route('kelompokKeahlian.update', ['id'=>$kelompokKeahlian->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="inputnama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $kelompokKeahlian->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="inputnama" class="form-label">Program Keahlian</label>
                            <select type="text" name="program_keahlian_id" class="form-control">
                                <option value="">-</option>
                                @foreach($programKeahlian as $bk)
                                <option value="{{$bk->id}}">{{$bk->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="inputnama" class="form-label">Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control">{{ $kelompokKeahlian->deskripsi }}</textarea>
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