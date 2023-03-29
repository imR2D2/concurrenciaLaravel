@extends('layouts.master-dashboard')
@section('title') Grupos
@endsection
@section('content')
<div class="card">
    <div class="card-header">
    <h1 class="h3 text-center" >{{ __('Grupos') }}</h1>
    </div>
    <div class="card-body">
    <div class="container">
        
        <table class="table">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Key_name') }}</th>
                    <th>{{ __('Description') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($grupos as $grupo)
                <tr>
                    <td>{{$grupo->id}}</td>
                    <td>{{$grupo->Name}}</td>
                    <td>{{$grupo->Key_name}}</td>
                    <td>{{$grupo->Description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>


@endsection
