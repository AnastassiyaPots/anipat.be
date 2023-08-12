@extends('layouts.app')

@section('title', 'Изменение записи')

@section('content')

<a href="{{ route('admin.registers.index') }}" class="btn btn-success mt-5 mx-2"> Вернуться назад </a>

<div class="container mt-5">
        <h1>Изменить услугу</h1>
        <form method="POST" action="{{ route('order.store') }}" class="row g-3">
            @csrf
            <div class="col-md-12">
                <label for="user" class="form-label">Имя пользователя:</label>
                <select name="user" id="user" class="form-select">
                    <option value="">Выберите имя пользователя</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <label for="service" class="form-label">Выберите услугу:</label>
                <select name="service" id="service" class="form-select">
                    <option value="">Выберите услугу сначала</option>
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ $service->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-12">
                <label for="master" class="form-label">Выберите мастера:</label>
                <select name="master" id="master" class="form-select">
                    <option value="">Выберите услугу сначала</option>
                </select>
            </div>

            <div class="col-md-12">
                <label for="price" class="form-label">Цена:</label>
                <input type="text" id="price" name="price" class="form-control" readonly>
            </div>

            <div class="col-md-12">
                <label for="date" class="form-label">Выберите дату:</label>
                <input type="date" id="date" name="date" class="form-control">
                @error('date')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-12">
                <label for="time" class="form-label">Выберите время:</label>
                <input type="time" id="time" name="time" class="form-control">
                @error('time')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-success mb-4">Заказать</button>
            </div>
        </form>
    </div>

    <!-- Подключаем jQuery и Bootstrap 5 JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        // Обработчик события при выборе услуги
        $('#service').change(function() {
            // Получаем значение выбранной услуги
            var serviceId = $(this).val();

            // Очищаем список мастеров
            $('#master').empty();

            // Делаем AJAX запрос для получения мастеров, предоставляющих выбранную услугу
            $.ajax({
                url: '/get-masters-by-service/' + serviceId,
                type: 'GET',
                success: function(response) {
                    // Добавляем полученные мастеры в список
                    $.each(response.masters, function(key, value) {
                        $('#master').append('<option value="' + value.id + '" data-price="' + value.price + '">' + value.name + '</option>');
                    });

                    // Обновляем цену, если выбран мастер
                    updatePrice();
                }
            });
        });

        // Обработчик события при выборе мастера
        $('#master').change(function() {
            // Обновляем цену при выборе мастера
            updatePrice();
        });

        // Функция для обновления цены на основе выбранного мастера
        function updatePrice() {
            var price = $('#master option:selected').data('price');
            $('#price').val(price);
        }
    </script>


@endsection