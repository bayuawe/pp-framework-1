@extends('layouts.app')

@section('content')
    <h1>News Detail</h1>
    <!-- Isi halaman berita berdasarkan judul, pembuat, tanggal, kategori, dll di sini -->
    <p>News Title: {{ $judul }}</p>
    <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
@endsection
