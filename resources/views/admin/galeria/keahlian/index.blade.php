@extends('layouts.master')
@section('title', 'BMTI | DATA KEAHLIAN')

@section('custom-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
@endsection
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Kompetensi Keahlian') }}</h4>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table id="dataTable" class="table">
                            <thead>
                                <tr>
                                    <a href="{{route('keahlian.create')}}"
                                        class="btn btn-primary btn-sm btn-rounded btn-icon-text">
                                        <i class="ti-upload btn-icon-prepend"></i>
                                        Create
                                    </a>
                                </tr>
                                <tr>
                                    <th>ID</th>
                                    <th>Kategori Kompetensi</th>
                                    <th>Judul</th>
                                    <th>Materi</th>
                                    <!-- <th>Gambar Banner</th>
                                    <th>File Content</th>
                                    <th>Video Content</th> -->
                                    <th>Author</th>
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
                                    <td>{{$row->nama_kompetensi}}</td>
                                    <td>{{$row->judul}}</td>
                                    <td>{!! $row->materi !!}</td>
                                    <!-- <td>{{$row->gambar_banner}}</td>
                                    <td>{{$row->file_content}}</td>
                                    <td>{{$row->video_content}}</td> -->
                                    <td>{{$row->author}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>{{$row->updated_at}}</td>
                                    <td><a href="{{ route('keahlian.edit', ['id'=>$row->id]) }}"
                                            class="btn btn-dark btn-sm btn-rounded btn-icon-prepend">Edit
                                            <i class="ti-reload btn-icon-append"></i></a></td>
                                    <td><a href="{{ route('keahlian.delete', ['id'=>$row->id]) }}"
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