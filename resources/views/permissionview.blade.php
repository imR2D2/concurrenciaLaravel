@extends('layouts.master-dashboard')
@section('title') Permisos
@endsection
@section('content')
<div class="card">
    <div class="card-header">
    <h1 class="h3 text-center" >{{ __('Permission') }}</h1>
    </div>
    <div class="card-body">
    <div class="container">
        
    <a href="{{ url('agregar-permiso/')}}" class="btn btn-success mb-2">
            <i class="fas fa-fw fa-plus"></i>
            Agregar
        </a>

        <table class="table">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Acciones') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permisos as $permissions)
                <tr>
                    <td>{{$permissions->id}}</td>
                    <td>{{$permissions->name}}</td>
                    <td>
                        <a href="{{ url('editar-permiso/'. $permissions -> id)}}" class="btn btn-info btn-sm">
                        <i class="fas fa-fw fa-edit"></i>  
                        Editar
                        </a>
                        <a href="{{ url('eliminar-permiso/'. $permissions -> id)}}" class="btn btn-danger btn-sm">
                        <i class="fas fa-fw fa-trash"></i>  
                        Eliminar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>

@endsection
