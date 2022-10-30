@extends('template.layout')
@section('content')
    <h1 class="text-center">Login EPW 2023</h1>
    <div class="mt-4">
        <form action="/login" method="post">
            @csrf
            <div class="container" style="width: 50%">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <a href="/register">No Account? Register here</a>
                <div class="d-block mt-4">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
@endsection
