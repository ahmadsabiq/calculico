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
        @foreach ($users as $user)
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
  
{{-- <div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Nama Latihan</th>
          <th scope="col">Skor</th>
          <th scope="col">Header</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1,001</td>
          <td>random</td>
          <td>data</td>
          <td>placeholder</td>
          <td>text</td>
        </tr>
        <tr>
          <td>1,002</td>
          <td>placeholder</td>
          <td>irrelevant</td>
          <td>visual</td>
          <td>layout</td>
        </tr>
        <tr>
          <td>1,003</td>
          <td>data</td>
          <td>rich</td>
          <td>dashboard</td>
          <td>tabular</td>
        </tr>
        <tr>
          <td>1,003</td>
          <td>information</td>
          <td>placeholder</td>
          <td>illustrative</td>
          <td>data</td>
        </tr>
        <tr>
          <td>1,004</td>
          <td>text</td>
          <td>random</td>
          <td>layout</td>
          <td>dashboard</td>
        </tr>
        <tr>
          <td>1,005</td>
          <td>dashboard</td>
          <td>irrelevant</td>
          <td>text</td>
          <td>placeholder</td>
        </tr>
        <tr>
          <td>1,006</td>
          <td>dashboard</td>
          <td>illustrative</td>
          <td>rich</td>
          <td>data</td>
        </tr>
        <tr>
          <td>1,007</td>
          <td>placeholder</td>
          <td>tabular</td>
          <td>information</td>
          <td>irrelevant</td>
        </tr>
        <tr>
          <td>1,008</td>
          <td>random</td>
          <td>data</td>
          <td>placeholder</td>
          <td>text</td>
        </tr>
        <tr>
          <td>1,009</td>
          <td>placeholder</td>
          <td>irrelevant</td>
          <td>visual</td>
          <td>layout</td>
        </tr>
        <tr>
          <td>1,010</td>
          <td>data</td>
          <td>rich</td>
          <td>dashboard</td>
          <td>tabular</td>
        </tr>
        <tr>
          <td>1,011</td>
          <td>information</td>
          <td>placeholder</td>
          <td>illustrative</td>
          <td>data</td>
        </tr>
        <tr>
          <td>1,012</td>
          <td>text</td>
          <td>placeholder</td>
          <td>layout</td>
          <td>dashboard</td>
        </tr>
        <tr>
          <td>1,013</td>
          <td>dashboard</td>
          <td>irrelevant</td>
          <td>text</td>
          <td>visual</td>
        </tr>
        <tr>
          <td>1,014</td>
          <td>dashboard</td>
          <td>illustrative</td>
          <td>rich</td>
          <td>data</td>
        </tr>
        <tr>
          <td>1,015</td>
          <td>random</td>
          <td>tabular</td>
          <td>information</td>
          <td>text</td>
        </tr>
      </tbody>
    </table>
  </div> --}}
@endsection