@extends('layouts.suggest')
@section('content')
<form action="" method="post">
    <section id="about" class="about">
        <div class="container">
            <div class="description">
                <div class="comment">
                    <p>В полях ниже вы можете указать название или описать то что нашли и пометить месторасположение находки на карте, а так же прикрепить несколько фото</p>
                </div>
                <div class="main input">
                    <div class="left input">
                        <div class="nam">
                            <label for="about" class="labelname">
                                Название (если знаете)
                            </label>
                            <input type="text" name="name" class="name" placeholder="Введите название (необязательно)">
                        </div>
                        <div class="desc">
                            <label for="about" class="labeldesc">Описание</label>
                            <textarea name="descr" placeholder="Введите описание"></textarea>
                        </div>
                    </div>
                    <div class="middle input">
                        <p>
                            Карта
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d76894.9551830763!2d39.238166390507466!3d51.68949726488338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1654257335279!5m2!1sru!2sru" width="600" height="450" style="border:black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="right">
                        <a href="#" class="button">Прикрепить фото</a>
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
