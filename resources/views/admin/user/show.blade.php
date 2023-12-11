@extends('dashboard.layouts.main')

@section('container')
<form>
    <fieldset disabled>
      <legend>Detail User</legend>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Nama</label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->name }}">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Email</label>
        <input type="email" id="disabledTextInput" class="form-control" placeholder="{{ $user->email }}">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Role</label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->usertype }}">

    </fieldset>
  </form>
  <a href="/dashboard/user" class="btn btn-success"> <span><i class="bi bi-chevron-left"></i></span> Bact to All User</a>
  <a href="/updateuser/{{ $user->id }}" class="btn btn-warning"> Edit</a>
  <form action='/deleteuser/{{ $user->id }}' class="d-inline" method="POST">
    @csrf
    <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $user->name }}?')"><i class="bi bi-trash"></i> Delete</button>
    </form>
@endsection