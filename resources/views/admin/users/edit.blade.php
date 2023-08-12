@extends('layouts.app')

@section('title', 'Редактирование пользователя')

@section('content')

<a href="{{ route('admin.users.index', $user) }}" class="btn btn-success mt-4">Назад</a>

<h1>Редактирование пользователя: {{ $user->name }}</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
            <label for="name">Email</label>
            <input type="text" name="email" value="{{ $user->email }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-success mt-4">Сохранить</button>
    </form>
@endsection