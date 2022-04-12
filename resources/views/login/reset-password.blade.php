@extends('layouts.main')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="container mt-5">
                        <main class="form-registration">
                            <form action="{{ route('password.update') }}" method="POST">
                                @csrf
                                <h1>
                                    <font color="white"> Update Password</font>
                                </h1>
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="form-floating">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder="name@example.com" required
                                        value="{{ old('email', $request->email) }}">
                                    <label for="floatingInput">Email address</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password"
                                        class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                        id="password" placeholder="Password" required>
                                    <label for="floatingPassword">Password</label>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password_confirmation" class="form-control rounded-bottom"
                                        id="password" placeholder="Confirm Password" required>
                                    <label for="floatingPassword">Confirm Password</label>
                                </div>
                                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Reset Password</button>
                            </form>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
