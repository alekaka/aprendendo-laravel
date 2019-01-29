@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edição de Cartápio</h1>
        <hr>
        <form action="{{route('menu.update', ['menu' => $menu->id])}}" method="post">
            {{csrf_field()}}
            <p class="form-group @if($errors->has('name')) has-error @endif">
                <label>Nome do Menu</label>
                <input type="text" name="name" value="{{$menu->name}}" class="form-control">
                @if($errors->has('name'))
                    <span class="help-block">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
            </p>

            <p class="form-group @if($errors->has('price')) has-error @endif">
                <label>Preço</label>
                <input type="text" name="price" value="{{$menu->price}}" class="form-control">
                @if($errors->has('price'))
                    <span class="help-block">
                        <strong>{{$errors->first('price')}}</strong>
                    </span>
                @endif
            </p>

            <p class="form-group @if($errors->has('restaurant_id')) has-error @endif">
                <label>Preço</label>
                <select name="restaurant_id" class="form-control">
                    @foreach ($restaurants as $r)
                        <option value="{{$r->id}}"
                            @if($menu->restaurant_id == $r->id)
                                selected
                            @endif
                        >{{$r->name}}</option>
                    @endforeach
                </select>
                @if($errors->has('restaurant_id'))
                    <span class="help-block">
                        <strong>{{$errors->first('restaurant_id')}}</strong>
                    </span>
                @endif
            </p>

            <input type="submit" value="Atualizar" class="btn btn-success btn-lg">
        </form>
    </div>
@endsection