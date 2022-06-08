@extends('layouts.main')

@section('content')
<div class='jumbotron text-center'>
<h1>Portal Informasi Siswa</h1>
<p>Selamat datang di Portal Informasi Siswa 404!</p>
<a href="{{ url ('/info-kegiatan') }}" class='btn btn-dark'>Info Kegiatan</a>
<a href="{{ url ('/data-siswa') }}" class='btn btn-primary'>Data Siswa</a>
</div>
@endsection