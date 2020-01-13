
@extends('layouts.app')

@section('content')
    <div class="my-5">
        <h1 class="text-center">
            Virtual Shopping
        </h1>
        <h1 class="text-center">
            Shop and fit real-time!
        </h1>
    
        <div class="text-center">
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-success">Register</a>
        </div>
    </div>
@endsection