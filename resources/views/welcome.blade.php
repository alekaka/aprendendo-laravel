@extends('layout')

@section('content')
    @if (Route::has('login'))
    <div class="top-right links">
        @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        @endif
    </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
        <hr>
        @php
            $users = [
                    ['name' => 'Thiago', 'email' => 'athiago88@gmail.com'],
                    ['name' => 'Lucas', 'email' => 'lucas@gmail.com'],
                    ['name' => 'Santos', 'email' => 'Santos@gmail.com'],
            ];
        @endphp

        @foreach($users as $user)
            {{$user['name']}} - {{$user['email']}} <br>
        @endforeach
    </div>
@endsection

       