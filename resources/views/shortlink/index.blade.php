@extends('template.layout')
@section('content')
    <h1 class="text-center mt-5">Shortlink bangsat</h1>
    <div class="container">
        <div class="d-flex justify-content-center">
            <table class="table table-bordered" style="width: 80%">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Short</th>
                        <th scope="col">Original</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shortlinks as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td><a href="{{ $item->short }}">{{ $item->short }}</a></td>
                            <td><a href="{{ $item->original }}">{{ $item->original }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/shortlink/create" class="btn btn-primary">Create</a>
        </div>
    </div>
@endsection
