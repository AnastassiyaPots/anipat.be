@extends('layouts.app')

@section('title', 'Управление записями')

@section('content')

<a href="{{ route('admin.dashboard') }}" class="btn btn-success mt-4">Назад</a>

<a href="{{ route('admin.registers.create') }}" class="btn btn-success mt-4">Создать новую услугу</a>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Мастер</th>
                <th>Услуга</th>
                <th>Время</th>
                <th>Дата</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registers as $register)
                <tr>
                    <td>{{ $register->id }}</td>
                    <td>{{ $register->user_id }}</td>
                    <td>{{ $register->master_id }}</td>
                    <td>{{ $register->service_id }}</td>
                    <td>{{ $register->date }}</td>
                    <td>{{ $register->hour }}</td>
                    <td>
                        <a href="{{ route('admin.registers.edit', $register->id) }}" class="btn btn-success">Редактировать</a>
                        <form action="{{ route('admin.registers.destroy', $register->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection