@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Restaurantes</h1>
    <hr>
    <div class="col-md-12"> 
        @foreach ($restaurants as $r)
            <div class="col-md-4">
                <h2>
                    <a href="{{route('home.single', ['id' => $r->id])}}">{{$r->name}}</a>
                </h2>
                <p>
                    {{$r->description}}
                </p>
            </div>    
        @endforeach
    </div>
    {{$restaurants->links()}}
</div>
@endsection
