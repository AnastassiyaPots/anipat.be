@extends('layouts.app')

@section('title', 'Наши услуги')

@section('content')

 <!--    <a href="{{ route('home') }}" class="w-25 btn btn-md btn-success mt-4" type="submit" >На главную</a> -->

    <h3 class="featurette-heading">Наши услуги</h3>

    @guest
    <div class="d-flex justify-content-center mb-5 mt-5">
        <a href="{{ route('register') }}" class="btn btn-success"> Для оформления услуги, зарегистрируйтесь на нашем сайте! </a>
    </div>
    @endguest

    @auth

    <div class="d-flex justify-content-center mb-5 mt-5">
        <a href="{{ route('order.index') }}" class="btn btn-success"> Оставить заявку </a>
    </div>

    @endauth

    @foreach($services as $service)
    <hr class="featurette-divider">


        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h3 class="featurette-heading">{{ $service->title }}</h3>
                    <p class="lead">{{ $service->description }}</p>
                    <p class="lead">Мастера:</p>
                     @foreach($service->masters as $master)
                        <ul class="lead">
                            <li>{{ $master->name}}, цена услуги {{ $master->pivot->price }}</li>
                        </ul>
                    @endforeach 
            </div>
            <div class="col-md-6 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    <image class="hr-img-service" xlink:href="{{ asset($service->img) }}"></image>
                </svg>
            </div>
        </div>
    @endforeach

    <hr class="featurette-divider">

    @guest
    <div class="d-flex justify-content-center mb-5 mt-5">
        <a href="{{ route('register') }}" class="btn btn-success">Для оформления услуги, зарегистрируйтесь на нашем сайте! </a>
    </div>
    @endguest

    @auth

    <div class="d-flex justify-content-center mb-5 mt-5">
        <a href="{{ route('order.index') }}" class="btn btn-success"> Оставить заявку </a>
    </div>

    @endauth

    <footer class="container">
        <p class="float-end"><a href="#">Вернуться наверх</a></p>
        <p>&copy; 2008–2023 ANIPAT</p>
    </footer>

@endsection



    
