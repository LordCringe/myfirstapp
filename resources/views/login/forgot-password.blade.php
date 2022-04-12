@extends('layouts.main')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="container mt-5">
                        <main class="form-signin">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="{{ route('password.email') }}" method="post">
                                @csrf
                                <h1 class="display-4">Forgot Password</h1>
                                <div class="form-floating">
                                    <input type="text" name="email" class="form-control" placeholder="Email" autofocus
                                        required>
                                    <label for="floatingInput">Email</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button class="w-100 btn btn-lg btn-primary" type="submit">Send Reset Link</button>
                            </form>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
