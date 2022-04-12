@extends('layouts.main')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Write without <span>Fear</span> <br> Edit without <span>Mercy</span></h1>
            @auth
                <a href="/dashboard" class="btn btn-primary tombol">Go Dashboard</a>
            @else
                <a href="{{ route('register') }}" class="btn btn-primary tombol">Try to Write</a>
            @endauth
        </div>
    </div>

    <div class="container">
        {{-- Info Panel --}}
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="https://source.unsplash.com/200x150?writing" alt="writing">
                        <h4>Writing</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-lg">
                        <img src="https://source.unsplash.com/200x150?inspiration" alt="inspiration">
                        <h4>Inspiring</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-lg">
                        <img src="https://source.unsplash.com/200x150?motivation" alt="motivation">
                        <h4>Motivation</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
