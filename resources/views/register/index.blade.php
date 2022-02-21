@extends('layouts.main')
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="container mt-5">
            <main class="form-registration">
                <form action="/register" method="post">
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
                  <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Registration</button>
                </form>
                <small class="d-block text-center mt-3"> <font color="white"> Already Register? </font> <a href="/login">Login!</a></small>
            </main>
          </div>
        </div>
    </div>
  </div>
</div>    
@endsection