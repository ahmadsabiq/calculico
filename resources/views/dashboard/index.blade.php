@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat Datang, {{ auth()->user()->name }}</h1>
  </div>

  <div>
    <button class="btn btn-primary m">
      <a href="/dashboard/latihan" class="btn btn-primary">Latihan</a>
    </button>
    <button class="btn btn-primary">
      <a href="/dashboard/laporan" class="btn btn-primary">Lihat Laporan</a>
    </button>
@endsection