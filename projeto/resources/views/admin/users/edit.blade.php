@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>Editar Usuário</h1>
        <hr>
        <form action="{{route('user.store')}}" method="post">
            {{csrf_field()}}
            <p class="form-group @if($errors->has('name')) has-error @endif">
                <label>Nome do Usuário</label>
                <input type="text" name="name" value="{{$user->name}}" class="form-control">
                @if($errors->has('name'))
                    <span class="help-block">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
            </p>

            <p class="form-group @if($errors->has('email')) has-error @endif">
                <label>Email</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control">
                @if($errors->has('email'))
                    <span class="help-block">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                @endif
            </p>

            <p class="form-group @if($errors->has('password')) has-error @endif">
                <label>Senha</label>
                <input type="password" name="password" class="form-control">
                @if($errors->has('password'))
                    <span class="help-block">
                        <strong>{{$errors->first('password')}}</strong>
                    </span>
                @endif
            </p>

            <p class="form-group @if($errors->has('password')) has-error @endif">
                <label>Confirmar senha</label>
                <input type="password" name="password_confirmation" class="form-control">
                @if($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{$errors->first('password_confirmation')}}</strong>
                    </span>
                @endif
            </p>

            <input type="submit" value="Atualizar Usuário" class="btn btn-success btn-lg">
        </form>
    </div>
@endsection