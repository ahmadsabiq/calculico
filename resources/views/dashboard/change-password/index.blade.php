@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ganti Password</h1>
  </div>

  @if (session('success') === 'password-updated')
        <div class="alert alert-success">
            Password berhasil diubah!
        </div>
        @endif

        <form method="post" action="{{ route('password.update') }}" class="mt-6">
            @csrf
            @method('put')
    
            <div class="mb-3">
                <x-input-label for="update_password_current_password" :value="__('Password Lama')" />
                <x-text-input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-danger" />
            </div>
    
            <div class="mb-3">
                <x-input-label for="update_password_password" :value="__('Password Baru')" />
                <x-text-input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-danger" />
            </div>
    
            <div class="mb-3">
                <x-input-label for="update_password_password_confirmation" :value="__('Konfirmasi Password')" />
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-danger" />
            </div>
    
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            </div>
    
            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-dark"
                >{{ __('Saved.') }}</p>
            @endif
        </form>
@endsection