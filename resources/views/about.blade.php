@extends('layouts.app')

@section('title', 'О нас')

@section('content')


<hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h3 class="featurette-heading">ГРУМИНГ-ЦЕНТР</h3>
                <p class="lead">Наш груминг-салон предлагает вам весь спектр услуг для красоты и здоровья ваших любимцев.
                Мы возьмёмся за стрижку собаки и выполним её в соответствии со всеми стандартами, в случае же, если вы сами захотите стать стилистом своего питомца – мы с удовольствием выслушаем и учтём все ваши предложения.</p>
                <a href="{{ route('home') }}" class="w-50 btn btn-md btn-success mt-4" type="submit" >На главную</a>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                <image class="hr-img" xlink:href="/public/images/dog-2.jpg"></image>
            </svg>
        </div>
    </div>
<hr class="featurette-divider">






@endsection