@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Laporan</h1>
</div>

@can('admin')
    <div>
    @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('deletereport') }}" class="mb-3" method="POST">
      @csrf
      <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus Laporan?')">Hapus Semua Laporan</button>
      </form>
    </div>
@endcan

<form action="{{ route('dashboard.laporan.search') }}" method="GET" class="mb-3">
  <div class="input-group">
      <input type="text" class="form-control" placeholder="Search..." name="keyword">
      <button class="btn btn-outline-secondary" type="submit">Search</button>
  </div>
</form>


@if($modul->count() > 0)

@if(request()->has('keyword'))
    <!-- Button to go back to the dashboard/laporan route -->
    <a href="/dashboard/laporan" class="btn btn-secondary mb-3 "><i class="bi bi-chevron-left"></i>Kembali ke Halaman Laporan</a>

    <p>Hasil pencarian: <span class="fw-bold">{{ request('keyword') }}</span></p>
@endif

<div class="table-responsive table-bordered small">
    <table class="table table-striped table-bordered table-sm text-center">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Modul</th>
          <th scope="col">Level</th>
          <th scope="col">Soal</th>
          <th scope="col">Percobaan Mengulang</th>
          <th scope="col">Tanggal</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($modul as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->tittle }}</td>
          <td>{{ $user->level }}</td>
          <td>{{ $user->question }}</td>
          <td>{{ $user->attempt }}x</td>
          <td>{{ $user->created_at }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    {{-- Display pagination links --}}
    {{ $modul->links('pagination::bootstrap-4') }}

    @else
    <p>No results found.</p>
@endif
</div>
@endsection
