@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>Inserção  de Restaurante</h1>
        <hr>
        <form action="{{route('restaurant.store')}}" method="post">
            {{csrf_field()}}
            <p class="form-group @if($errors->has('name')) has-error @endif">
                <label>Nome do Restaurante</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                @if($errors->has('name'))
                    <span class="help-block">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
            </p>

            <p class="form-group @if($errors->has('address')) has-error @endif">
                <label>Endereço</label>
                <input type="text" name="address" value="{{old('address')}}" class="form-control">
                @if($errors->has('address'))
                    <span class="help-block">
                        <strong>{{$errors->first('address')}}</strong>
                    </span>
                @endif
            </p>

            <p class="form-group @if($errors->has('address')) has-error @endif">
                <label>Fale sobre o restaurante</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                @if($errors->has('description'))
                    <span class="help-block">
                        <strong>{{$errors->first('description')}}</strong>
                    </span>
                @endif
            </p>

            <input type="submit" value="Cadastrar" class="btn btn-success btn-lg">
        </form>
    </div>
@endsection