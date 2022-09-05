@extends('layouts.master')
@section('title', 'BMTI - Edit Data Quiz')
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

    .quiz li {
        margin-left: 7px;
        list-style: none;
    }

    @media only screen and (min-width: 400px) and (max-width: 767px) {
        .marginResponsive {
            margin-top: 25px;
        }
    }
</style>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="row justify-content-center marginResponsive">
        <div class="col-lg-10 d-flex justify-content-between marginResponsive">
            <h3 class="card-title" style="padding-left: 3px;padding-bottom: 10px;">{{$data->judul}}</h3>
            <div>
                <button type="button" class="btn btn-sm btn-primary btn-rounded" data-toggle="modal" data-target="#exampleModalCenter">+ Tambah Soal</button>
                <button type="button" class="btn btn-sm btn-primary btn-rounded" id="import-modal" data-toggle="modal" data-id="{{$data->id}}" data-target="#modalImport">+ Import Soal</button>
                <a href="{{route('template.soal.download')}}" class="btn btn-sm btn-primary btn-rounded">+ Download Template</a>
                <button type="button" class="btn btn-sm btn-primary btn-rounded" id="edit-quiz" data-toggle="modal" data-id="{{$data->id}}" data-target="#modalEditQuiz">+ Edit Quiz</button>
            </div>
        </div>
    </div>

    @foreach($pertanyaan as $pert)
    <div class="row justify-content-center">
        <div class="col-lg-10 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <h4 class="card-title" style="padding-left: 3px;">{{$pert->pertanyaan}}</h4>
                        <!-- <a class="ms-auto" href="#" onclick="window.open('http://localhost:8000/admin/pelatihan/22/topik', 'Preview', 'width=1200,height=650');"><i class="menu-icon mdi mdi-dots-vertical"></i></a> -->
                        <div class="dropdown ms-auto">
                            <i class="menu-icon mdi mdi-dots-vertical" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item edit-pertanyaan" href="#" data-toggle="modal" data-id="{{$pert->id}}" data-target="#modalEditPertanyaan">Ubah</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="quiz">
                            <li>A. &nbsp; {{$pert->pilihan_a}}</li>
                            <li>B. &nbsp; {{$pert->pilihan_b}}</li>
                            <li>C. &nbsp; {{$pert->pilihan_c}}</li>
                            <li>D. &nbsp; {{$pert->pilihan_d}}</li>
                        </ul>
                        <hr>
                        <p><b>Jawaban :</b> {{$pert->jawaban}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Modal Buat Pertanyaan -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pertanyaan Quiz</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('pertanyaan.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="inputpertanyaan" class="form-label">Pertanyaan</label>
                        <textarea type="text" name="pertanyaan" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="inputgambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                        <input type="hidden" name="quiz_id" value="{{$data->id}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="inputpilihan_a" class="form-label">Pilihan A</label>
                        <input type="radio" name="pilihan" class="pilihan" value="a">
                        <input type="text" name="pilihan_a" id="pilihan_a" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="inputpilihan_b" class="form-label">Pilihan B</label>
                        <input type="radio" name="pilihan" class="pilihan" value="b">
                        <input type="text" name="pilihan_b" id="pilihan_b" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="inputpilihan_c" class="form-label">Pilihan C</label>
                        <input type="radio" name="pilihan" class="pilihan" value="c">
                        <input type="text" name="pilihan_c" id="pilihan_c" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="inputpilihan_d" class="form-label">Pilihan D</label>
                        <input type="radio" name="pilihan" class="pilihan" value="d">
                        <input type="text" name="pilihan_d" id="pilihan_d" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jawaban" class="form-label">Jawaban</label>
                        <input type="text" name="jawaban" id="jawaban" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal Edit Pertanyaan -->
<div class="modal fade" id="modalEditPertanyaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Pertanyaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-edit-pertanyaan">
                <form id="form-pertanyaan" action="{{route('pertanyaan.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="inputpertanyaan" class="form-label">Pertanyaan</label>
                        <textarea type="text" name="pertanyaan" id="pertanyaan" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="inputgambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                        <input type="hidden" name="quiz_id" value="{{$data->id}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="inputpilihan_a" class="form-label">Pilihan A</label>
                        <input type="radio" name="pilihan" class="pilihan" value="a">
                        <input type="text" name="pilihan_a" id="pilihan_a" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="inputpilihan_b" class="form-label">Pilihan B</label>
                        <input type="radio" name="pilihan" class="pilihan" value="b">
                        <input type="text" name="pilihan_b" id="pilihan_b" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="inputpilihan_c" class="form-label">Pilihan C</label>
                        <input type="radio" name="pilihan" class="pilihan" value="c">
                        <input type="text" name="pilihan_c" id="pilihan_c" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="inputpilihan_d" class="form-label">Pilihan D</label>
                        <input type="radio" name="pilihan" class="pilihan" value="d">
                        <input type="text" name="pilihan_d" id="pilihan_d" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jawaban" class="form-label">Jawaban</label>
                        <input type="text" name="jawaban" id="jawaban" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalImport" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Import Soal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body import-modal">
                <form action="{{route('pertanyaan.import')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <input type="hidden" name="quizId" id="quizId">
                        <input type="file" name="file" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modalEditQuiz" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pengaturan Quiz</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('quiz.store')}}" method="POST">
                <div class="modal-body modalEdit">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Nama Soal</label>
                        <input type="text" name="judul" id="judul" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Kategori Soal</label>
                        <select type="text" name="kelompok_keahlian_id" id="kelompok_keahlian" class="form-control">
                        @foreach($kelKeahlian as $kel)
                        <option value="{{$kel->id}}">{{$kel->nama}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Tipe Soal</label>
                        <select type="text" name="tipe_quiz" id="tipe_soal" class="form-control">
                            <option value="1">Test Akhir</option>
                            <option value="2">Timbal Balik</option>
                            <option value="3">Formatif</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea type="text" name="deskripsi" id="deskripsi" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger btn-rounded" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-sm btn-primary btn-rounded" style="margin-left:5px;">Perbaharui</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

@section('script')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script>
    $('#bntModal').click(function() {
        if ($('#modal-topik').hasClass('d-none')) {
            $('#modal-topik').removeClass('d-none')
        } else {
            $('#modal-topik').addClass('d-none')
        }
    });

    $("#import-modal").on("click", function() {
        var quizId = $(this).data('id');
        $(".import-modal #quizId").val(quizId);
    });

    $("#edit-quiz").on("click", function() {
        var quizId = $(this).data('id'); 
        $.ajax({
            url: "/admin/quiz/get-quiz",
            method: "GET",
            data: {
                search: quizId
            },
            success: function(data) {
                console.log(data.judul)

                $(".modalEdit #judul").val(data.judul);
                $(".modalEdit #kelompok_keahlian").val(data.kelompok_keahlian_id);
                $(".modalEdit #tipe_soal").val(data.tipe_quiz);
                $(".modalEdit #deskripsi").val(data.deskripsi);
            }
        });

    });

    $(".edit-pertanyaan").on("click", function() {
        var id = $(this).data('id'); 
        $.ajax({
            url: "/admin/pertanyaan/get-pertanyaan",
            method: "GET",
            data: {
                search: id
            },
            success: function(data) {
                $(".modal-edit-pertanyaan #pertanyaan").val(data.pertanyaan);
                $(".modal-edit-pertanyaan #pilihan_a").val(data.pilihan_a);
                $(".modal-edit-pertanyaan #pilihan_b").val(data.pilihan_b);
                $(".modal-edit-pertanyaan #pilihan_c").val(data.pilihan_c);
                $(".modal-edit-pertanyaan #pilihan_d").val(data.pilihan_d);
                $(".modal-edit-pertanyaan #jawaban").val(data.jawaban);
            }
        });

    });

    $('#bnt-batal').click(function() {
        $('#modal-topik').addClass('d-none')
    });

    $('.pilihan').click(function() {

        if ($('input[name="pilihan"]:checked').val() == 'a') {
            let jawaban = $('#pilihan_a').val()
            $('#jawaban').val(jawaban)
        }

        if ($('input[name="pilihan"]:checked').val() == 'b') {
            let jawaban = $('#pilihan_b').val()
            $('#jawaban').val(jawaban)
        }

        if ($('input[name="pilihan"]:checked').val() == 'c') {
            let jawaban = $('#pilihan_c').val()
            $('#jawaban').val(jawaban)
        }

        if ($('input[name="pilihan"]:checked').val() == 'd') {
            let jawaban = $('#pilihan_d').val()
            $('#jawaban').val(jawaban)
        }
    });

</script>
@endsection