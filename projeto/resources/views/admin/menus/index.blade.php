@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>Cardápios</h1>
        <a href="{{route('menu.newu')}}" class="pull-right btn btn-success">Novo</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Restaurante</th>
                    <th>Criado Em</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $m)
                    <tr>
                        <td>{{$m->id}}</td>
                        <td>{{$m->name}}</td>
                        <td>
                            <a href="{{route('restaurant.edit', ['restaurant' => $m->restaurant->id])}}">
                                {{$m->restaurant->name}}
                            </a>    
                        </td>
                        <td>{{$m->created_at}}</td>
                        <td>
                            <a href="{{route('menu.edit', ['menu' => $m->id])}}" class="btn btn-primary">EDITAR</a>
                            <a href="{{route('menu.remove', ['id' => $m->id])}}" class="btn btn-danger">EXCLUIR</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection