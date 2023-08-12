@extends('layouts.app')

@section('title', 'Админская панель')

@section('content')


<div class="row">
    <div class="col-md-7">
        <h3 class="featurette-heading">АДМИНСКАЯ ПАНЕЛЬ</h3>
        <ul class="lead">
            <a href="{{ route('admin.users.index') }}" class="w-50 btn btn-md btn-success mt-4" type="submit">Управление пользователями</a>
            <a href="{{ route('admin.registers.index') }}" class="w-50 btn btn-md btn-success mt-4" type="submit">Управление записями</a>
        </ul>
    </div>
</div>

<hr class="featurette-divider">












@endsection