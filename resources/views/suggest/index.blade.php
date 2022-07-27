@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<section id="about" class="about">
    <form>
        <div class="container">
            <div class="description">
                <table class="table table-dark table-striped" >
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Координаты</th>
                        <th scope="col">Фото</th>
                        <th scope="col">Опубликовано</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($suggestions as $suggest)
                    <tr>
                        <th scope="row">{{ $suggest->id }}</th>
                        <td>{{ $suggest->name }}</td>
                        <td>{{ $suggest->description }}</td>
                        <td>{{ $suggest->lat }}, {{ $suggest->lng }}</td>
                        <td>{{ $suggest->file_name }}</td>
                        <td>@if ($suggest->is_published != 0) Да @else Нет @endif</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </link>
            </div>
        </div>
    </form>
</section>
    <style>
        .container {
            padding-bottom: 50px;
        }
    </style>
@endsection
