@extends('layout')

@section('title')
    Hello Page
@endsection

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
                Hello, {{$name}}
                <hr>
                @if($name == 'Test')
                    @include('includes/any')
                @elseif($name == 'thiago')
                    <h1>{{$name}}</h1>
                @else
                    <h1>Nenhum arquivo incluido</h1>
                @endif
                <hr>
                @empty($name)
                    <h2>Testando isset</h2>
                @endempty
            </div>
        </div>
@endsection

