@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ganti Password</h1>
  </div>

    <a href="/dashboard/user/" class="btn btn-success">Kembali ke Halaman Users</a>

  @if (session('success') === 'password-updated')
        <div class="alert alert-success">
            Password berhasil diubah!
        </div>
        @endif

  <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('put')

    <div>
        <label for="currentpassword">Password Lama</label>
        <input id="update_password_current_password" name="current_password" type="password" class="form-control @error ('current_password') is-invalid @enderror" id="current_password" required>
    @error('current_password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
        {{-- <input type="text" id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password">
        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" /> --}}
    </div>

    <div>
        <label for="update_password_password" class="form-label">Password Baru</label>
    <input id="update_password_password" name="password" type="password" class="form-control @error ('password') is-invalid @enderror" id="password" required>
    @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
        {{-- <x-input-label for="update_password_password" :value="__('New Password')" />
        <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" /> --}}
    </div>

    <div>
        <label for="update_password_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
        <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control @error ('password_confirmation') is-invalid @enderror" id="password_confirmation" required>
    @error('password_confirmation')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
        {{-- <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" /> --}}
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

        
    </div>
</form>

@include('profile.partials.update-password-form')


@endsection