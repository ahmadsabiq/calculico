@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Tambah User</h1>
    </div>

    <a href="/dashboard/user" class="btn btn-success mb-3"><i class="bi bi-chevron-left"></i> Kembali ke Halaman Users</a>
    <form action="/dashboard/user" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="input" class="mb-2">Nama lengkap</label>
            <input type="text" name="name" class="form-control shadow @error('name') is-invalid @enderror" id="name"  required value="{{ old('name') }}">
            {{-- <label for="name">Nama</label> --}}
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>

      <div class="form-group mb-3">
        <label for="Input" class="mb-2">Email</label>
        <input type="email" name="email" class="form-control shadow @error ('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
        @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
      </div>

      <div class="form-group mb-3">
        <label for="input" class="mb-2">Password</label>
        <input type="password" name="password" class="form-control shadow @error ('password') is-invalid @enderror" id="password">
        @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
      </div>
  
      <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Tambah User</button>
    </form>
@endsection