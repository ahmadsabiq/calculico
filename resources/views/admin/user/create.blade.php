@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Tambah User</h1>
    </div>

    <a href="/dashboard/user" class="btn btn-success">Kembali ke Halaman Users</a>
    <form action="/dashboard/user" method="POST">
        @csrf

        <div class="form-group">
            <label for="input">Nama lengkap</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
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
        <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
        @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
      </div>

      {{-- <div class="form-group">
            <label for="Input">Role</label>
            <select name="usertype" class="form-select @error('usertype') is-invalid
            @enderror" required value="{{ old('usertype') }}">
                <option selected>-- ROLE --</option>
                <option value="admin" >Admin</option>
                <option value="user" >user</option>
              </select>
            @error('usertype')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div> --}}

      <div class="form-group">
        <label for="input">Password</label>
        <input type="password" name="password" class="form-control @error ('password') is-invalid @enderror" id="password" placeholder="Password">
        @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
      </div>

        {{-- <div class="form-floating">
            <input type="password" name="password_confirmation" class="form-control @error ('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Password Confirmation">
            <label for="floatingPassword">Konfirmasi Password </label>
            @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> --}}
  
      <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Tambah User</button>
    </form>
@endsection