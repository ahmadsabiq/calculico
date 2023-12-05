@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Tambah User</h1>
    </div>

    <form action="/register" method="POST">
        @csrf

        <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
            <label for="name">Nama</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>

        <div class="form-floating">
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
          </div>

        <div class="form-floating">
            <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror" id="dob" placeholder="Tanggal Lahir" required value="{{ old('dob') }}">
            <label for="dob">Tanggal Lahir</label>
            @error('dob')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>

        <div class="form-floating">
            <input type="text" name="username" class="form-control @error ('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
            <label for="username">Username</label>
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>

      <div class="form-floating">
        <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="floatingInput">Email</label>
        @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
      </div>

      <div class="form-floating">
        <input type="password" name="password" class="form-control @error ('password') is-invalid @enderror" id="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
        @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
      </div>

        <div class="form-floating">
            <input type="password" name="password_confirmation" class="form-control @error ('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Password Confirmation">
            <label for="floatingPassword">Konfirmasi Password </label>
            @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
  
      <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Tambah User</button>
    </form>
@endsection