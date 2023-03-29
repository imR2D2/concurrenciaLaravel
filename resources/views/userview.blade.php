@extends('layouts.master-dashboard')
@section('title') Usuarios
@endsection
@section('content')
    <div class="container">
        
        <div class="card">
        <div class="card-header">
            <h1 class="h3 text-center" >{{ __('Usuarios') }}</h1>
        </div>
        <div class="card-body">
        <a href="{{ url('agregar-usuarios/')}}" class="btn btn-success mb-2">
            <i class="fas fa-fw fa-plus"></i>
            Agregar
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{ __('Name') }}</th>
                    <th scope="col">{{ __('Email') }}</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $usuario)
                <tr>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>
                        <a href="{{ url('editar-usuario/'. $usuario -> id)}}" class="btn btn-info btn-sm">
                        <i class="fas fa-fw fa-edit"></i>  
                        Editar
                        </a>
                        <a href="{{ url('eliminar-usuario/'. $usuario -> id)}}" class="btn btn-danger btn-sm">
                        <i class="fas fa-fw fa-trash"></i>  
                        Eliminar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <user-component :users="{{json_encode($user)}}"></user-component>
        </div>
       
    </div>
@endsection
