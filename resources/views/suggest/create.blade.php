@extends('layouts.suggest')
@section('content')
<form action="{{ route('suggestions.store') }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="coords" id="coord">
    @csrf
    <section id="about" class="about">
        <div class="container">
            <div class="description">
                <div class="comment">
                    <p>В полях ниже вы можете указать название или описать то что нашли и пометить месторасположение находки на карте, а так же прикрепить фото</p>
                </div>
                <div class="main input">
                    <div class="left input">
                        <div class="nam">
                            <label for="about" class="labelname">
                                Название (если знаете)
                            </label>
                            <input id='name' type="text" name="name" class="name" placeholder="Введите название (необязательно)">
                        </div>
                        <div class="desc">
                            <label for="about" class="labeldesc">Описание</label>
                            <textarea id="description" name="description" placeholder="Введите описание"></textarea>
                        </div>
                    </div>
                    <div class="middle input">
                        <p>
                            Карта
                        </p>
                        <div id="map" class="map"></div>
                        <script src="https://api-maps.yandex.ru/2.1/?apikey=b7104193-7bb8-4982-9eec-f7201dc906ee&lang=ru_RU"></script>
                        <script src="{{ asset('js/map.js') }}"></script>
                    </div>
                    <div class="fileUpload">
                        <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
                        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                        <input name="userfile" type="file" />
                    </div>

                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer">
        <div class="container">
            <div class="send">
                <input type="submit" class="button">
            </div>
        </div>
    </footer>
</form>
@endsection
