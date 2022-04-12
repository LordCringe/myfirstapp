@extends('layouts.main')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="container mt-5">
                        <main class="form-signin">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <h1 class="display-4">Please Login</h1>
                                <div class="form-floating">
                                    <input type="text" name="username"
                                        class="form-control @error('username') is-invalid @enderror" id="username"
                                        placeholder="Username" autofocus required value="{{ old('username') }}">
                                    <label for="floatingInput">Username</label>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password" required>
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                                <small class="d-block text-center mt-3"><a href="{{ route('password.request') }}"> Forgot
                                        yourpassword</a>
                                </small>
                            </form>
                            <small class="d-block text-center mt-3">
                                <font color="white"> Not Register?</font> <a href="{{ route('register') }}">Register
                                    Now!</a>
                            </small>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
