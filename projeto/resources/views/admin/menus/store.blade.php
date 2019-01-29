@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>Inserção  de Cartápio</h1>
        <hr>
        <form action="{{route('menu.store')}}" method="post">
            {{csrf_field()}}
            <p class="form-group @if($errors->has('name')) has-error @endif">
                <label>Nome do Menu</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                @if($errors->has('name'))
                    <span class="help-block">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
            </p>

            <p class="form-group @if($errors->has('price')) has-error @endif">
                <label>Preço</label>
                <input type="text" name="price" value="{{old('price')}}" class="form-control">
                @if($errors->has('price'))
                    <span class="help-block">
                        <strong>{{$errors->first('price')}}</strong>
                    </span>
                @endif
            </p>

            <p class="form-group @if($errors->has('restaurant_id')) has-error @endif">
                <label>Preço</label>
                <select name="restaurant_id" class="form-control">
                    <option value="">Selecione um Restaurante para Este Item do Cardápio</option>
                    @foreach ($restaurants as $r)
                        <option value="{{$r->id}}">{{$r->name}}</option>
                    @endforeach
                </select>
                @if($errors->has('restaurant_id'))
                    <span class="help-block">
                        <strong>{{$errors->first('restaurant_id')}}</strong>
                    </span>
                @endif
            </p>

            <input type="submit" value="Cadastrar" class="btn btn-success btn-lg">
        </form>
    </div>
@endsection