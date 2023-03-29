@extends('layouts.master-dashboard')
@section('title') Crear Roles @endsection
@section('content')
<div class="container">

    @include('layouts.alert')
<div class="card">

<div class="card-header">
<h1 class="h3 text-center" >{{ __('Crear rol') }}</h1>
</div>

<div class="card-body">
<div class="row">
        <div class="col card my-4">
            <form action="{{url('crear-roles')}}" method="post">
                @csrf
                <div class="my-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input id="name" type="text" class="form-control" name="name" autocomplete="name" autofocus>
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