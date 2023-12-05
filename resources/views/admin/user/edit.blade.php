@extends('dashboard.layouts.main')

@section('container')
<form>
      <legend>Edit User</legend>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Nama</label>
        <input type="text" class="form-control" placeholder="{{ $user->name }}">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Jenis Kelamin</label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->gender }}">
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Tanggal Lahir</label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->dob }}">
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Username</label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->username }}">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Email</label>
        <input type="email" id="disabledTextInput" class="form-control" placeholder="{{ $user->email }}">
      </div>
      {{-- <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Nama Anak</label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Tanggal Lahir </label>
        <input type="date" class="form-control" id="usia" name="usia">
      </div> --}}

    </fieldset>
  </form>
  <a href="/dashboard/user" class="btn btn-success"> <span> <svg class="bi"><use xlink:href="#file-earmark"/></svg></span> Bact to All User</a>
  <a href="/dashboard/user" class="btn btn-warning"> <span> <svg class="bi"><use xlink:href="#file-earmark"/></svg></span> Edit</a>
  <a href="/dashboard/user" class="btn btn-danger"> <span> <svg class="bi"><use xlink:href="#file-earmark"/></svg></span> Delete</a>
@endsection