@extends('dashboard.layouts.main')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-5">
      <div class="container mt-5">
        <main class="form-registration">
            <form action="/dashboard/users" method="post">
            @csrf
              <h1 > <font color="white"> Registration Form</font></h1>
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="floatingInput">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}" >
                <label for="floatingPassword">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="is_admin" class="form-label">Level User</label>
                <select class="form-select" name="is_admin">
                  @foreach ($users as $user)
                  <option value="1" selected>Administrator</option>
                  <option value="0">User</option>
                  @endforeach
                </select>
            </div>
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Registration</button>
            </form>
            <small class="d-block text-center mt-3"> <font color="white"> Already Register? </font> <a href="/login">Login!</a></small>
        </main>
      </div>
    </div>
</div>
{{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New User</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/users" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
          @error('name')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required value="{{ old('username') }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="passoword" required>
        </div>
        <div class="mb-3">
            <label for="is_admin" class="form-label">Level User</label>
            <select class="form-select" name="is_admin">
              @foreach ($users as $user)
              <option value="1" selected>Administrator</option>
              <option value="0">User</option>
              @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create User</button>
      </form>
</div> --}}
  @endsection