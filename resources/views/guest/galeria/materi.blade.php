@extends('layouts.master_front')
@section('title', 'Galeria - '.$data->judul)

@section('content')
<div class="teknik-permesinan">
    <div class="container">
        <div class="row">
            <div class="col-12 text-kompetensi-2 order-1 text-center">
                <h1>{{$data->judul}}</h1>
                <img src="{{asset('images/galeria/'.$data->gambar_banner)}}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="text-kompetensi-2">
            {!!$data->materi!!}
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <iframe src="{{asset('files/galeria/'.$data->file_content)}}" width="100%" height="1000px"></iframe>
    </div>
    @if($data->video_content)
    <div class="row justify-content-center">
        <video width="320" height="240" controls>
            <source src="{{asset('videos/galeria/'.$data->video_content)}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    @endif

</div>


<script>

</script>

@endsection