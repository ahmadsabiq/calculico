@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Laporan</h1>
</div>

<div class="table-responsive small">
    <table class="table table-striped table-sm">
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
  </div>
@endsection