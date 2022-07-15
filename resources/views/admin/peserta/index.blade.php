@extends('layouts.master')
@section('title', 'BMTI - Data Peserta')

@section('custom-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
@endsection
@section('content')

<style>
.marginCard {
    margin-bottom: 10px;
}
</style>

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Data Peserta') }}</h4>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table id="dataTable" class="table">
                            <thead>
                                <tr>
                                    <a href="{{route('peserta.create')}}"
                                        class="btn btn-primary btn-sm btn-rounded btn-icon-text marginCard">
                                        <i class="ti-upload btn-icon-prepend"></i>
                                        Create
                                    </a>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>NUPTK</th>
                                    <th>NIK</th>
                                    <th>Nama Depan</th>
                                    <th>Nama Belakang</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Desa Kelurahan</th>
                                    <th>Kecamatan</th>
                                    <th>Kota / Kabupaten</th>
                                    <th>Provinsi</th>
                                    <th>Email</th>
                                    <th>No Telepon</th>
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
                                    <td><?php echo $i++; ?></td>
                                    <td>{{$row->nuptk}}</td>
                                    <td>{{$row->NIK}}</td>
                                    <td>{{$row->nama_depan}}</td>
                                    <td>{{$row->nama_belakang}}</td>
                                    <td>{{$row->tempat_lahir}}</td>
                                    <td>{{$row->tanggal_lahir}}</td>
                                    <td>{{$row->alamat}}</td>
                                    <td>{{$row->desa_kelurahan}}</td>
                                    <td>{{$row->kecamatan}}</td>
                                    <td>{{$row->kota_kab}}</td>
                                    <td>{{$row->provinsi}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->no_telepon}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>{{$row->updated_at}}</td>
                                    <td><a href="{{ route('peserta.edit', ['id'=>$row->id]) }}"
                                            class="btn btn-dark btn-sm btn-rounded btn-icon-prepend">Edit
                                            <i class="ti-reload btn-icon-append"></i></a></td>
                                    <td><a href="{{ route('peserta.delete', ['id'=>$row->id]) }}"
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