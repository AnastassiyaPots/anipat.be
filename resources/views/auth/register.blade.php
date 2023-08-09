@extends('layouts.app')

@section('title', 'Регистрация')

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
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Пожалуйста, зарегистрируйтесь</h1>
            
            <div class="form-floating mt-4">
                <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name" value="{{ old('name') }}">
                <label for="floatingInput">Имя</label>
            </div>
            <div class="form-floating mt-4">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}">
                <label for="floatingInput">Адрес эл. почты</label>
            </div>
            <div class="form-floating mt-4">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
            </div>
            <div class="form-floating mt-4">
                <input type="password" class="form-control" placeholder="Password" name="password_confirmation">
                <label for="floatingPassword">Подтверждение пароля</label>
            </div>

            <button class="w-100 btn btn-lg btn-success mt-4" type="submit">Зарегистрироваться</button>
        </form>
    </main>
</div>

@endsection