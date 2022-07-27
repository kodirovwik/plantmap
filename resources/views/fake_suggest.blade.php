@extends('layouts.suggest')
@section('content')
<form action="" method="post">
    <section id="about" class="about">
        <div class="container">
            <div class="description">
                <div class="main input">
                    <div class="left input">
                        <div class="desc">
                            <label for="about" class="labeldesc">Пиши что хочешь)</label>
                            <textarea name="descr" placeholder="Можешь гадом обозвать, можешь руку мне пожмать"></textarea>
                        </div>
                    </div>
                    <div class="right">
                        <a href="#" class="button">Прикрепляй что хочешь</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer">
        <div class="container">
            <div class="send">
                <input type="submit" class="button" >
            </div>
        </div>
    </footer>
</form>
@endsection
