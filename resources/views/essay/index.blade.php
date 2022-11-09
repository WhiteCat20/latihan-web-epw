@extends('template.layout')
@section('content')
    <div class="container" style="width: 50%; margin-top: 20vh">
        <form action="{{ route('post-essay') }}" method="POST" enctype="multipart/form-data">
         @csrf
            <label for="nama_penulis" class="form-label">Nama Penulis</label>
            <input type="text" class="form-control" id="nama_penulis" name="nama_penulis">
            <label for="judul_essay" class="form-label">Judul Essay</label>
            <input type="text" class="form-control" id="judul_essay" name="judul_essay">
            <label for="abstrak" class="form-label">Abstrak</label>
            <input type="file" class="form-control" id="abstrak" name="abstrak">
            <label for="essay" class="form-label">Essay</label>
            <input type="file" class="form-control" id="essay" name="essay">
            <div class="d-flex justify-content-center">
             <button class="btn btn-danger mt-5">Submit!!</button>
            </div>
        </form>
    </div>
@endsection
