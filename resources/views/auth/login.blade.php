@extends('layouts.app')

@section('title', 'Вход')

@section('content')

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        Есть ошибки:
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="text-center mt-5">
    <main class="form-signin">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Пожалуйста, войдите</h1>
            
            <div class="form-floating mt-4">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}">
            <label for="floatingInput">Адрес эл. почты</label>
            </div>
            <div class="form-floating mt-4">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <label for="floatingPassword">Пароль</label>
            </div>

            <div class="checkbox mb-3 mt-4">
            <label>
                <input type="checkbox" value="remember-me"> Запомнить меня
            </label>
            </div>
            <button class="w-100 btn btn-lg btn-success mt-4" type="submit" >Войти</button>
        </form>
    </main>
</div>

@endsection