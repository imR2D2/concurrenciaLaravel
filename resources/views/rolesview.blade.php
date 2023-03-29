@extends('layouts.master-dashboard')
@section('title') Roles
@endsection
@section('content')
    <div class="container">
        
        <div class="card">
        <div class="card-header">
            <h1 class="h3 text-center" >{{ __('Roles') }}</h1>
        </div>
        <div class="card-body">
        <a href="{{ url('agregar-rol/')}}" class="btn btn-success mb-2">
            <i class="fas fa-fw fa-plus"></i>
            Agregar
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{ __('ID') }}</th>
                    <th scope="col">{{ __('Name') }}</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td>
                        <a href="{{ url('editar-rol/'. $role -> id)}}" class="btn btn-info btn-sm">
                        <i class="fas fa-fw fa-edit"></i>  
                        Editar
                        </a>
                        <a href="{{ url('eliminar-rol/'. $role -> id)}}" class="btn btn-danger btn-sm">
                        <i class="fas fa-fw fa-trash"></i>  
                        Eliminar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
       
        <roles-component :roles="{{json_encode($roles)}}"></roles-component>
        </div>
       
    </div>
@endsection
