@extends('layouts.main')
@section('content')
<section id="about" class="about">
    <form>
        <div class="container">
            <div class="description">
                <h1>Success!</h1>
                <?php dump($suggest_data) ?>
                <a href="{{ route('suggestions.create') }}" class="button">Вернуться на страницу создания</a>
            </div>
        </div>
    </form>
</section>
@endsection
