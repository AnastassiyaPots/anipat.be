@extends('layouts.app')

@section('title', 'Наша команда')

@section('content')

<a href="{{ route('home') }}" class="w-25 btn btn-md btn-success mt-4" type="submit" >На главную</a>

<h3 class="featurette-heading">Наша команда</h3>

@foreach($masters as $master)
<hr class="featurette-divider">


    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h3 class="featurette-heading">{{$master->name}}</h3>
                <p class="lead">{{$master->description}}</p>
                
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                <image class="hr-img" xlink:href="{{ asset($master->img) }}"></image>
            </svg>
        </div>
    </div>


@endforeach
<hr class="featurette-divider">

<footer class="container">
    <p class="float-end"><a href="#">Вернуться наверх</a></p>
    <p>&copy; 2008–2023 ANIPAT</p>
</footer>

@endsection