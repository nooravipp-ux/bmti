@extends('layouts.master')
@section('title', 'BMTI | Pelatihan')
@section('content')

@section('custom-css')
<style>
    .backdrop-modal {
        padding: 20px;
        position: absolute;
        top: 200px;
        width: 95%;
        right: 2%;
        height: auto;
        background-color: white;
        border: 1px solid #ddd;
        box-shadow: 0.2px 0.6px 0.5px 0.5px;
        z-index: 1;
    }

    .topik {
        padding-left: 30px;
        display: flex;
        color: #8D8D8D;
    }

    .pelatihan {
        display: flex;
    }

    .pelatihan i {
        float: inline-end;
    }

    .button-container {
        margin-top: 20px;
    }

    #modal-topik {
        position: fixed;
        left: 300px;
        min-width: 1000px;
    }

    .konten {
        padding-left: 30px;
    }

    .kuis {
        padding-left: 30px;
    }
    .btn-tambah-konten a {
        text-decoration: none;
    }
</style>
@endsection
<div class="content-wrapper">
    @foreach($topiks as $tp)
    <div class="row justify-content-center">
        <div class="col-lg-10 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <i class="menu-icon mdi mdi-drag pl-4"></i>
                        <h4 class="card-title" style="padding-left: 3px;">{{$tp->judul}}</h4>
                        <a class="ms-auto" href=""><i class="menu-icon mdi mdi-dots-vertical"></i></a>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($konten as $kt)
                            @if($kt->topik_id == $tp->id)
                            <div class="konten d-flex">
                                <i class="menu-icon mdi mdi-content-paste pl-4"></i>
                                <h5 class="card-title" style="padding-left: 3px;">{{$kt->judul}}</h5>
                                <a class="ms-auto" href=""><i class="menu-icon mdi mdi-dots-vertical"></i></a>
                            </div>
                            @endif
                            @endforeach
                            @foreach($topikQuiz as $tq)
                                @if($tq->topik_id == $tp->id)
                                <div class="kuis d-flex">
                                    <i class="menu-icon mdi mdi-lead-pencil pl-4"></i>
                                    <h5 class="card-title" style="padding-left: 3px;">{{$tq->judul}}</h5>
                                    <a class="ms-auto" href=""><i class="menu-icon mdi mdi-dots-vertical"></i></a>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="btn-tambah-konten d-flex">
                        <i class="menu-icon mdi mdi-hospital pl-4"></i>
                        <a class="btn-konten" href="{{route('pelatihan.konten', ['pelatihanId' => $pelatihan->id, 'topikId' => $tp->id])}}" style="padding-left: 3px;">Tambah konten Pembelajaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row justify-content-center">
        <div class="col-lg-10 grid-margin">
            <div class="button-container">
                <button type="submit" class="btn btn-primary btn-sm btn-rounded float-right" data-toggle="modal" data-target="#exampleModalCenter" id="bntModal">+ Topik Pembelajaran</button>
            </div>
        </div>
    </div>

</div>
<div id="modal-topik" class="row justify-content-center d-none">
    <div class="col-lg-6 grid-margin">
        <div class="card">
            <div class="card-body">
                <form action="{{route('pelatihan.topik.simpan')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control">
                        <input type="hidden" name="kursus_id" value="{{$pelatihan->id}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea type="text" name="deskripsi" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <button id="btn-batal" class="btn btn-danger btn-sm btn-rounded float-right ml-2">Batal</button>
                        <button type="submit" class="btn btn-primary btn-sm btn-rounded float-right">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#bntModal').click(function() {
        if ($('#modal-topik').hasClass('d-none')) {
            $('#modal-topik').removeClass('d-none')
        } else {
            $('#modal-topik').addClass('d-none')
        }
    });

    $('#bnt-batal').click(function() {
        $('#modal-topik').addClass('d-none')
    });
</script>
@endsection