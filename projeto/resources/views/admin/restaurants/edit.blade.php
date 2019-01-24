@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edição de Restaurante</h1>
        <hr>
        <form action="{{route('restaurant.update', ['restaurant' => $restaurant->id])}}" method="post">
            {{csrf_field()}}
            <p class="form-group @if($errors->has('name')) has-error @endif">
                <label>Nome do Restaurante</label>
                <input type="text" name="name" value="{{$restaurant->name}}" class="form-control">
                @if($errors->has('name'))
                    <span class="help-block">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
            </p>

            <p class="form-group @if($errors->has('address')) has-error @endif">
                <label>Endereço</label>
                <input type="text" name="address" value="{{$restaurant->address}}" class="form-control">
                @if($errors->has('address'))
                    <span class="help-block">
                        <strong>{{$errors->first('address')}}</strong>
                    </span>
                @endif
            </p>

            <p class="form-group @if($errors->has('description')) has-error @endif">
                <label>Fale sobre o restaurante</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$restaurant->description}}</textarea>
                @if($errors->has('description'))
                    <span class="help-block">
                        <strong>{{$errors->first('description')}}</strong>
                    </span>
                @endif
            </p>

            <input type="submit" value="Atualizar" class="btn btn-success btn-lg">
        </form>
    </div>
@endsection