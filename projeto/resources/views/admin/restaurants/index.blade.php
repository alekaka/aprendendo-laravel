@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>Restaurantes</h1>
        <a href="{{route('restaurant.newu')}}" class="pull-right btn btn-success">Novo</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Criado Em</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->name}}</td>
                        <td>{{$r->created_at}}</td>
                        <td>
                            <a href="{{route('restaurant.edit', ['restaurant' => $r->id])}}" class="btn btn-primary">EDITAR</a>
                            <a href="{{route('restaurant.remove', ['id' => $r->id])}}" class="btn btn-danger">EXCLUIR</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection