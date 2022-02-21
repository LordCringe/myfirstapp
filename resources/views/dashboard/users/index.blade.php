@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Management Users</h1>
</div>
    @if (session()->has('success'))
    <div class="alert alert-success col-lg-5" role="alert">
      {{ session('success') }}
    </div>
    @endif
  <div class="table-responsive col-lg-8">
      <a href="/dashboard/users/create" class="btn btn-primary mb-3">Create New User</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Level User</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            @if ($user->is_admin == '1')
            <td>Administrator</td>
            @else
            <td>User</td>
            @endif
            <td>
            <a href="/dashboard/users/{{ $user->username }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="/dashboard/users/{{  $user->username }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/categories/{{ $user->username }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash"></span></button>
            </form>
          </td>
          </tr> 
          @endforeach
      </tbody>
    </table>
  </div>

@endsection