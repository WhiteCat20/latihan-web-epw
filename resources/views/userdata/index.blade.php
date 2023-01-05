@extends('template.layout')
@section('content')
    <h1>
        @foreach ($users as $item)
            <p>{{ $item->username }} | {{ $item->name }}</p>
        @endforeach
    </h1>
@endsection
