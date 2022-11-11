@extends('template.layout')
@section('content')
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
    <h1 class="text-center">Backend EPW 2023</h1>
    <h2 class="text-center">Hello {{ auth()->user()->username }}</h2>
    <div class="mt-5 d-flex justify-content-center">
        @php
            $time = time() * 2; // you have 1299446702 in time
            $year = ($time / 31556926) % 12; // to get year
            echo $year;
        @endphp
    </div>
@endsection
