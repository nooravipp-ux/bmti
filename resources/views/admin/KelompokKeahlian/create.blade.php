@extends('layouts.master')
@section('title', 'BMTI | DATA JENIS KURSUS')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Kelompok Keahlian') }}</h4>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('kelompokKeahlian.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="inputnama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputnama" class="form-label">Nama</label>
                            <select type="text" name="program_keahlian_id" class="form-control">
                                <option value="">-</option>
                                @foreach($programKeahlian as $bk)
                                <option value="{{$bk->id}}">{{$bk->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputnama" class="form-label">Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection