@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Approve User</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
    
@endif

{{-- <div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
        <form action="/approve-pending" method="post">
            @csrf
            @method('patch')
            <button type="submit">Approve ALL Role</button>
        </form>
  

    @foreach($pendingusers as $user)
    <p>{{ $user->name }} - {{ $user->email }}</p>
    <form action="{{ route('update-pending', ['userId' => $user->id]) }}" method="post">
        @csrf
        <button type="submit">Approve Role</button>
    </form>
@endforeach
</div> --}}

<div class="table-responsive small">
    <form action="/approve-pending" method="post">
        @csrf
        @method('patch')
        <button type="submit" class="btn btn-primary mb-3">Approve ALL Role</button>
    </form>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            {{-- <th scope="col">Tanggal Lahir</th> --}}
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pendingusers as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->usertype }}</td>
            {{-- <td>{{ $user->dob }}</td> --}}
            
            <td>
              <form action="{{ route('update-pending', ['userId' => $user->id]) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-success">Setuju</button>
            </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection