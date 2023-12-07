@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">User</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
    
@endif

<div class="table-responsive small">
  <a href="/dashboard/user/create" class="btn btn-primary mb-3">Tambah User</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Email</th>
          <th scope="col">Status</th>
          {{-- <th scope="col">Tanggal Lahir</th> --}}
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->usertype }}</td>
          {{-- <td>{{ $user->dob }}</td> --}}
          
          <td>
            <a href="/dashboard/user/{{ $user->id }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
            <a href="/updateuser/{{ $user->id }}" class="btn btn-warning">Edit</a>
            <form action='/deleteuser/{{ $user->id }}' class="d-inline" method="POST">
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $user->name }}?')"><i class="bi bi-trash"></i></button>
            </form>
            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection