@extends('layouts.master')
@section('title', 'BMTI | DATA TOPIK')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Data Topik') }}</h4>
                    <!-- <p class="card-description">
                    </p> -->
                    <form action="{{route('topik.update', ['id'=>$data->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="kursus_id" class="form-label">Kursus ID</label>
                            <select type="text" name="kursus_id" class="form-control">
                                @foreach($kursus as $row)
                                <option value="{{$row->id}}">{{$row->judul}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul" aria-describedby="emailHelp"
                                value="{{$data->judul}}">
                        </div>
                        <div class="mb-3">
                            <label for="materi" class="form-label">Materi</label>
                            <input type="text" name="materi" class="form-control" id="materi"
                                aria-describedby="emailHelp" value="{{$data->materi}}">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status (%)</label>
                            <input type="number" name="status" class="form-control" id="status"
                                aria-describedby="emailHelp" value="{{$data->status}}">
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