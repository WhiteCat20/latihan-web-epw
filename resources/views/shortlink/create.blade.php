@extends('template.layout')
@section('content')
    <h1 class="text-center mt-5">Create New Short Link</h1>
    <div class="container mx-auto" style="width: 30%">
        <form action="/shortlink" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="name">Nama Shortlink</label>
                <input class="form-control" type="text" id="name" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label" for="short">Short</label>
                <input class="form-control" type="text" id="short" name="short">
            </div>
            <div class="mb-3">
                <label class="form-label" for="original">Original</label>
                <input class="form-control" type="text" id="original" name="original">
            </div>
            <button class="btn btn-primary" type="submit">Create!</button>
        </form>
    </div>
@endsection
