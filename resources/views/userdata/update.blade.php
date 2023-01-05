@extends('template.layout')
@section('content')
    <input type="text" class="form-control" value="{{ $shortlink->name }}">
@endsection
