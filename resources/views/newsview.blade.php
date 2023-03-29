@extends('layouts.master-dashboard')
@section('title') News
@endsection
@section('content')

<div class="contariner-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Noticias</h6>
        </div>
        <div class="card-body">
            <a href="{{url('agregar-noticia')}}" class="btn btn-success my-2">Agregar</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Imagen</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($news as $new)
                    <tr>
                        <td>{{$new->id}}</td>
                        <td>{{$new->title}}</td>
                        <td>{{$new->image}}</td>
                        <td>{{$new->description}}</td>
                        <td>
                        <a href="{{ url('editar-noticia/'. $new -> id)}}" class="btn btn-info btn-sm">
                        <i class="fas fa-fw fa-edit"></i>  
                        Editar
                        </a>
                        <a href="{{ url('eliminar-noticia/'. $new -> id)}}" class="btn btn-danger btn-sm">
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