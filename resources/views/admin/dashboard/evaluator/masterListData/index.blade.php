@extends('layouts.master')
@section('title', 'BMTI | MASTER DATA LIST')
@section('custom-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
@endsection
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Master Data List') }}</h4>
                    <!-- <p class="card-description">
                    </p> -->

                    <div class="table-responsive">
                        <table id="dataTable" class="table">
                            <thead>
                                <tr>
                                    <a href="{{route('masterListData.create')}}"
                                        class="btn btn-primary btn-sm btn-rounded btn-icon-text">
                                        <i class="ti-upload btn-icon-prepend"></i>
                                        Create
                                    </a>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Program</th>
                                    <th>Jenis Kegiatan</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Periode Awal</th>
                                    <th>Periode Akhir</th>
                                    <th>Pola</th>
                                    <th>Moda</th>
                                    <th>Pb</th>
                                    <th>Kelas Group</th>
                                    <th>Penanggung Jawab Kegiatan</th>
                                    <th>Peserta Dipanggil</th>
                                    <th>Peserta Hadir</th>
                                    <th>Peserta Tuntas</th>
                                    <th>Peserta Tidak Tuntas</th>
                                    <th>Tanggal Evaluasi</th>
                                    <th>Laporan</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$row->program}}</td>
                                    <td>{{$row->jenis_kegiatan}}</td>
                                    <td>{{$row->nama_kegiatan}}</td>
                                    <td>{{$row->periode_awal}}</td>
                                    <td>{{$row->periode_akhir}}</td>
                                    <td>{{$row->pola}}</td>
                                    <td>{{$row->moda}}</td>
                                    <td>{{$row->pb}}</td>
                                    <td>{{$row->kelas_group}}</td>
                                    <td>{{$row->penanggung_jawab_kegiatan}}</td>
                                    <td>{{$row->peserta_dipanggil}}</td>
                                    <td>{{$row->peserta_hadir}}</td>
                                    <td>{{$row->peserta_tuntas}}</td>
                                    <td>{{$row->peserta_tidak_tuntas}}</td>
                                    <td>{{$row->tanggal_evaluasi}}</td>
                                    <td>{{$row->laporan}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>{{$row->updated_at}}</td>
                                    <td><a href="{{ route('masterListData.edit', ['id'=>$row->id]) }}"
                                            class="btn btn-dark btn-sm btn-rounded btn-icon-prepend">Edit
                                            <i class="ti-reload btn-icon-append"></i></a></td>
                                    <td><a href="{{ route('masterListData.delete', ['id'=>$row->id]) }}"
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