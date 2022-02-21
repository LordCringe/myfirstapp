@extends('layouts.main')

@section('content')

<div class="p-5 mb-5 rounded-3 halaman-about">
    <div class="container">
      <img src="img/{{ $image }}" width="200" class="rounded-circle img-fluid gambar">
      <h3 class="display-4">{{ $name }}</h3>
      <p class="email"><span> {{ $email }}</span></p>
    </div>
</div>

<div class="container">
    <div class="row">
      <div class="col text-center">
        <h1>About</h1>
      </div>
    </div>
  
    <div class="row">
      <div class="col text-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col text-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
@endsection
    
