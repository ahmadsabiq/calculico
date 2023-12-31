@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit User</h1>
</div>

<a href="/dashboard/user/" class="btn btn-success mb-3"><i class="bi bi-chevron-left"></i>Kembali ke Halaman Users</a>

@foreach ($users as $user)
    
<form method="post" action="{{ route('updateuser', $user->id) }}">
  @csrf
  @method('PUT')

  <div class="form-group">
      <label for="input" class="mb-2">Nama lengkap</label>
      <input type="text" name="name" class="form-control mb-3 @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name', $user->name) }}">
      @error('name')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
    </div>

<div class="form-group">
      <label for="Input" class="mb-2">Role</label>
      <select name="usertype" class="form-select @error('usertype') is-invalid
      @enderror" required value="{{ old('usertype', $user->usertype) }}">
          <option selected>{{ $user->usertype }}</option>
          <option value="admin" >Admin</option>
          <option value="user" >User</option>
          <option value="pending" >Pending</option>
        </select>
      @error('usertype')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
    </div>

<button class="btn btn-primary w-100 py-2 mt-4" type="submit">Edit User</button>
</form>
@endforeach
@endsection