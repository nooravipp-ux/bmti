@extends('layouts.master')
@section('title', 'BMTI | DATA JENIS KURSUS')

@section('custom-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
@endsection
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Data Bidang Keahlian') }}</h4>
                    <!-- <p class="card-description">
                    </p> -->

                    <div class="table-responsive">
                        <table id="dataTable" class="table">
                            <thead>
                                <tr>
                                    <a href="{{route('bidangKeahlian.create')}}" class="btn btn-primary btn-sm btn-rounded btn-icon-text">
                                        <i class="ti-upload btn-icon-prepend"></i>
                                        Create
                                    </a>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($bidangKeahlian as $row)
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->deskripsi}}</td>
                                    <td><a href="{{ route('bidangKeahlian.edit', ['id'=>$row->id]) }}" class="btn btn-dark btn-sm btn-rounded btn-icon-prepend">Edit
                                            <i class="ti-reload btn-icon-append"></i></a></td>
                                    <td><a href="{{ route('bidangKeahlian.delete', ['id'=>$row->id]) }}" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-sm btn-rounded btn-icon-text">Delete
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