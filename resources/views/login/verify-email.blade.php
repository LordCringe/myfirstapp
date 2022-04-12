@extends('layouts.main')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="container mt-5">
                        <main class="form-signin">
                            <div class="card">
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            A fresh verification link has been sent to your email
                                        </div>
                                    @endif
                                    Before processing, please check your email for verification.
                                    Or
                                    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                                        @csrf
                                        <button class="w-100 btn btn-lg btn-primary"
                                            type="submit">{{ _('click here') }}</button>
                                    </form>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
