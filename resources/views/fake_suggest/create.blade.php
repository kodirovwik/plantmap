@extends('layouts.suggest')
@section('content')
    <form action="{{ route('fake_suggest.store') }}" method="post" enctype="multipart/form-data">
        @csrf
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
                    <input type="submit" class="button" >
                </div>
            </div>
        </footer>
    </form>
@endsection
