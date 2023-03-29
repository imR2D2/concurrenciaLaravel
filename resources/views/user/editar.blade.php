@extends('layouts.master-dashboard')
@section('title') Editar Usuarios @endsection
@section('content')
<div class="container">

    @include('layouts.alert')

    <div class="card">
        <div class="card-header">
        <h1 class="h3 text-center" >{{ __('Editar usuario') }}</h1>
        </div>
        <div class="card-body">
        <div class="row">
        <div class="col card my-4">
            <form action="{{url('actualizar-usuario/'.$user->id)}}" method="post">
                @csrf
                <div class="my-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input id="name" type="text" value="{{$user->name}}" class="form-control" name="name" autocomplete="name" autofocus>
                </div>
                <div class="my-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="text" value="{{$user->email}}" class="form-control" name="email" autocomplete="email" autofocus>
                </div>
                <div class="my-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input id="password" type="password" value="{{$user->password}}" class="form-control" name="password" autocomplete="password" autofocus>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
        </div>

    </div>

</div>
@endsection