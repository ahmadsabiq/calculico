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

<div class="bordered table-striped" style="border-radius: 5px;">
  <a href="/dashboard/user/create" class="btn btn-primary mb-3">Tambah User</a>
    <table class="table table-striped table-bordered table-sm text-center">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Email</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <span style="background-color: 
                @if($user->usertype == 'admin') red 
                @elseif($user->usertype == 'pending') yellow 
                @elseif($user->usertype == 'user') green 
                @endif; border-radius: 5px; padding: 2px 5px;">
                {{ $user->usertype }}
            </span>
        </td>
          <td>
            <a href="/dashboard/user/{{ $user->id }}" class="btn btn-info">Lihat</a>
            <a href="/updateuser/{{ $user->id }}" class="btn btn-warning">Edit</a>
            <form action='/deleteuser/{{ $user->id }}' class="d-inline" method="POST">
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $user->name }}?')">Hapus</button>
            </form>
            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection