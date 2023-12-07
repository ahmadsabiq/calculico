@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit User</h1>
</div>

<a href="/dashboard/user/" class="btn btn-success">Kembali ke Halaman Users</a>
@foreach ($users as $item)
    
@endforeach
<form method="post" action="{{ route('profile.update') }}">
  @csrf
  @method('patch')

  <div class="form-group">
      <label for="input">Nama lengkap</label>
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name', $item->name) }}">
      {{-- <label for="name">Nama</label> --}}
      @error('name')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
    </div>

  {{-- <div class="form-group">
      <select name="gender" class="form-select @error('gender') is-invalid
      @enderror" required value="{{ old('gender') }}">
          <option selected>-- Jenis Kelamin --</option>
          <option value="Laki-laki" >Laki-laki</option>
          <option value="Perempuan" >Perempuan</option>
        </select>
      @error('gender')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
    </div> --}}

  {{-- <div class="form-group">
      <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror" id="dob" placeholder="Tanggal Lahir" required value="{{ old('dob') }}">
      <label for="dob">Tanggal Lahir</label>
      @error('dob')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
    </div> --}}

  {{-- <div class="form-group">
      <input type="text" name="username" class="form-control @error ('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
      <label for="username">Username</label>
      @error('username')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
    </div> --}}

<div class="form-group">
  <label for="Input">Email</label>
  <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="email" required value="{{ old('email', $item->email) }}">
  @error('email')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
</div>

<div class="form-group">
      <label for="Input">Role</label>
      <select name="usertype" class="form-select @error('usertype') is-invalid
      @enderror" required value="{{ old('usertype', $item->usertype) }}">
          <option selected>{{ $item->usertype }}</option>
          <option value="admin" >Admin</option>
          <option value="user" >User</option>
        </select>
      @error('usertype')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
    </div>

<button class="btn btn-primary w-100 py-2 mt-4" type="submit">Edit User</button>
</form>
@endsection