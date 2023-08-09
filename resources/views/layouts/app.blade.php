<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.su/docs/5.0/examples/carousel/">
    <link href="/public/styles/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="/public/styles/main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .img, .hr-img {
        width: 100%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
      }


      .hr-img1 {
        width: 150%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
      }

      .hr-img-service {
        width: 100%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="/public/styles/carousel.css" rel="stylesheet">

  </head>
  <body>


    
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
            <a href="{{ route('home') }}" class="navbar-brand">ANIPAT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Переключить навигацию">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                    @auth
                        <a href="{{ route('order.index') }}" class="btn btn-outline-success" aria-current="page">Оставить заявку</a>
                    @endauth
                    </li>
                </ul>
                <div class="d-flex">
                    @guest
                        <a href="{{ route('register') }}" class="btn btn-outline-success mx-2"> Регистрация </a>
                        <a href="{{ route('login') }}" class="btn btn-outline-success mx-2"> Вход </a>
                    @endguest

                    @auth
                        <a href="{{ route('logout') }}" class="btn btn-outline-success">Выход</a>
                        <form action="{{ route('logout') }}" method="POST" class="form-inline">
                            @csrf
                        </form>
                    @endauth
                </div>
            </div>
            </div>
        </nav>
    </header>
    
    <div class="container mt-6">
     
    <!-- не выскакивает в самом начале, выскакивает в конце? -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>  
    @endif
    

    @yield('content')
    

    </div>

    


    <script src="/public/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
      
  </body>
</html>