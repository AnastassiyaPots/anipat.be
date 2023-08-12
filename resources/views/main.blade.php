@extends('layouts.app')

@section('title', 'Главная')

@section('content')


<main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
                    <image class="img" xlink:href="/public/images/dog1.jpg"></image>
                </svg>

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Пушистые трансформации.</h1>
                        <p>Изысканный салон красоты для домашних животных открывает свои двери!</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
                    <image class="img" x="0" y="0" xlink:href="/public/images/cat1.jpg"></image>
                </svg>

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Любовь и забота в каждой стрижке.</h1>
                        <p>Уникальный салон красоты для вашего питомца.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
                    <image class="img" x="0" y="0" xlink:href="/public/images/catanddog.jpg"></image>
                </svg>

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Оздоровительные SPA-процедуры для лапочек.</h1>
                        <p>Роскошный салон красоты ждет вас и вашего любимца.</p>
                    </div>
                </div>
            </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
    </div>

    <div class="container marketing">

        <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h3 class="featurette-heading">ДОБРО ПОЖАЛОВАТЬ В НАШ ГРУМИНГ-ЦЕНТР</h3>
                    <p class="lead">Наш груминг-салон предлагает вам весь спектр услуг для красоты и здоровья ваших любимцев.</p>
                    <ul class="lead">
                        <li>Высокий профессионализм</li>
                        <li>Креативный подход</li>
                        <li>Работаем с 2008 года</li>
                    </ul>
                    <a href="{{ route('about') }}" class="w-50 btn btn-md btn-success mt-4" type="submit" >Узнать подробнее</a>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                        <image class="hr-img" xlink:href="/public/images/dog-2.jpg"></image>
                    </svg>
                </div>
            </div>

        <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h3 class="featurette-heading">НАША КОМАНДА</h3>
                    <p class="lead">Чтобы быть красивой, собаке достаточно найти себе опытного грумера.</p>
                    <a href="{{ route('masters') }}" class="w-50 btn btn-md btn-success mx-2 mt-4" type="submit" >Узнать подробнее</a>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                        <image class="hr-img" xlink:href="/public/images/masters1.png"></image>
                    </svg>
                </div>
            </div>

        <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h3 class="featurette-heading">ЧТО МЫ ДЕЛАЕМ</span></h3>
                    <p class="lead">Широкий спектр услуг:</p>
                        @foreach($services->take(3) as $service)
                        <ul class="lead">
                            <li>{{ $service->title }}</li>
                        </ul>
                        @endforeach
                    <a href="{{ route('services') }}" class="w-50 btn btn-md btn-success mt-4" type="submit" >Узнать подробнее</a>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                        <image class="hr-img1" xlink:href="/public/images/grooming.jpg"></image>
                    </svg>
                </div>
            </div>

    </div>

    <hr class="featurette-divider">

    <footer class="container">
    <p class="float-end"><a href="#">Вернуться наверх</a></p>
    <p>&copy; 2008–2023 ANIPAT</p>
    </footer>

</main>

