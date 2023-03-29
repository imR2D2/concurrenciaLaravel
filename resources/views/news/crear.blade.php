@extends('layouts.master-dashboard')
@section('title') Crear Noticia @endsection
@section('content')
<div class="container">

    @include('layouts.alert')
<div class="card">

<div class="card-header">
<h1 class="h3 text-center" >{{ __('Crear noticia') }}</h1>
</div>

<div class="card-body">
<div class="row">
        <div class="col card my-4">
            <form action="{{url('crear-noticia')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group my-3">
                    <label for="title" class="input-group-text">Title</label>
                    <input id="title" name="title" type="text" class="form-control" title="title" required autocomplete="title" autofocus>
                </div>
                <div class="input-group my-3">
                    <label for="image" class="input-group-text">Image</label>
                    <input id="image" name="image" type="file" class="form-control" title="image" required>
                </div>
                <div class="input-group my-3">
                    <label for="description" class="input-group-text">Description</label>
                    <textarea id="description" name="description" type="text" class="form-control" title="description" required></textarea>
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