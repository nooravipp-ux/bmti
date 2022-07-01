@extends('layouts.master')
@section('title', 'BMTI | DATA ROLE')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Data Role') }}</h4>
                    <!-- <p class="card-description">
                    </p> -->
                    <form action="{{route('role.update', ['id'=>$roles->id])}}" method="POST" enctype="multipart/form-data">
                    @method('put')    
                    @csrf
                    <div class="mb-3">
                                <label for="inputrole_name" class="form-label">Role Name</label>
                                <input type="text" name="role_name" class="form-control" id="inputrole_name"
                                    aria-describedby="emailHelp" value="{{ $roles->role_name }}" required>
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