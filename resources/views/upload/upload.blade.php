@extends('template.layout')
@section('content')
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container" style="margin-top: 20vh; width: 50%">
            <div class="mb-3">
                <label for="file_motlet" class="form-label">Motlet</label>
                <input class="form-control" type="file" id="file_motlet" name="file_motlet">
            </div>
            <div class="mb-3">
                <label for="file_essay" class="form-label">Essay</label>
                <input class="form-control" type="file" id="file_essay" name="file_essay">
            </div>
            <div class="mb-3">
                <label for="file_bukti_ss" class="form-label">Bukti Screenshoot</label>
                <input class="form-control" type="file" id="file_bukti_ss" name="file_bukti_ss">
            </div>
            <div class="mb-3">
                <label for="file_mbti" class="form-label">MBTI</label>
                <input class="form-control" type="file" id="file_mbti" name="file_mbti">
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
@endsection
