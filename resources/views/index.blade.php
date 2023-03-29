@extends('layouts.master-landing')
@section('content')
<section class="section">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    </div>
</section>



<section id="news" class="section py-4">
    <h2 class="h1 text-center my-4" style="padding-top: 30px">Call Of Duty</h2>
    <div class="container">
        <div class="row">
            @foreach($news as $new)
            <div class="col-lg-4">
                <div class="card" style="margin-right: 20px">
                <img src="{{asset('storage/'.$new->image)}}" class="card-img-top img-fluid" height="300px" width="200px">
                <div class="card-body">
                    <h5 class="card-title">{{$new->title}}</h5>
                    <p class="card-text">{{$new->description}}</p>
                    <a href="#" class="btn btn-danger">Más Información</a>
                </div>
                </div>
            </div>
            @endforeach           
        </div>
    </div>
</section>

@endsection