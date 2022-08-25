@extends('layouts.master')
@section('title', 'BMTI - Atur Data Pelatihan Mandiri')
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

@media only screen and (min-width: 400px) and (max-width: 767px) {
    .marginResponsive {
        margin-top: 25px;
    }
}
</style>
@endsection
<div class="content-wrapper">
    <div class="row justify-content-center">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <div class="col-lg-10 d-flex justify-content-between marginResponsive">
            <h3 class="card-title" style="padding-left: 3px;padding-bottom: 10px;">{{$pelatihan->judul}}</h3>
            <div>
                <a href="{{route('pelatihan.strukturProgram', [$pelatihan->id])}}"
                    class="btn btn-primary btn-sm btn-rounded">Struktur Program</a>
            </div>
        </div>
    </div>
    @foreach($topiks as $tp)
    <div class="row justify-content-center">
        <div class="col-lg-10 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <i class="menu-icon mdi mdi-drag pl-4"></i>
                        <h4 class="card-title" style="padding-left: 3px;">{{$tp->judul}}</h4>
                        <!-- <a class="ms-auto" href="#" onclick="window.open('http://localhost:8000/admin/pelatihan/22/topik', 'Preview', 'width=1200,height=650');"><i class="menu-icon mdi mdi-dots-vertical"></i></a> -->
                        <div class="dropdown ms-auto">
                            <i class="menu-icon mdi mdi-dots-vertical" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{route('topik.edit', ['id' => $tp->id])}}">Ubah</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($konten as $kt)
                            @if($kt->topik_id == $tp->id)
                            <div class="konten d-flex">
                                <i class="menu-icon mdi mdi-content-paste pl-4" style="margin-top:2px;"></i>
                                <p style="padding-left: 3px; margin-left:5px;">{{$kt->judul}}</p>
                                <div class="dropdown ms-auto">
                                    <i class="menu-icon mdi mdi-dots-vertical" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Pratinjau</a>
                                        <a class="dropdown-item" href="#">Ubah</a>
                                        <a class="dropdown-item" href="#">Hapus</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            @foreach($topikQuiz as $tq)
                            @if($tq->topik_id == $tp->id)
                            <div class="kuis d-flex">
                                <i class="menu-icon mdi mdi-lead-pencil pl-4" style="margin-top:2px;"></i>
                                <p style="padding-left: 3px; margin-left:5px;">{{$tq->judul}}</p>
                                <div class="dropdown ms-auto">
                                    <i class="menu-icon mdi mdi-dots-vertical" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Pratinjau</a>
                                        <a class="dropdown-item" href="#">Ubah</a>
                                        <a class="dropdown-item" href="#">Hapus</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="btn-tambah-konten d-flex mt-3">
                        <a class="btn-konten"
                            href="{{route('pelatihan.konten', ['pelatihanId' => $pelatihan->id, 'topikId' => $tp->id])}}"
                            style="padding-left: 3px;"> <i class="menu-icon mdi mdi-hospital pl-4" style="position:relative; top:2px;"></i> &nbsp; Tambah konten
                            Pembelajaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row justify-content-center">
        <div class="col-lg-10 grid-margin">
            <div class="button-container">
                <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal"
                    data-target="#exampleModalCenter">+ Topik Pembelajaran</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Topik Pembelajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('pelatihan.topik.simpan', [$pelatihan->id])}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Topik Pembelajaran</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Topik</label>
                        <textarea type="text" name="deskripsi" class="ckeditor form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-rounded" style="margin-left:5px;">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
$(document).ready(function() {
    $('.ckeditor').ckeditor();
});
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
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