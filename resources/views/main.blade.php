@extends('layouts.main')
@section('content')
<section id="about" class="about">
    <div class="container">
        <div class="description">
            <h1>Зачем это вообще надо?</h1>
            <div class="opisanie">
                <a>&nbsp Данный сэрвис был придуман почти мной. И существует он для того чтоб вы могли найти интересующие вас растения и не отрывая от ботвы вставить в задний проход. Это принесет свежесть, прохладу и, скорее всего, силу земли.</a>
            </div>
            <div class="dopopisanie">
                <div class="comment opisaniel">
                    <div>&nbsp А если без шуток, то это нужно для того чтоб найти классные растюхи расположенные в разных местах Воронежа. Карта составляется основываясь на собственном опыте и если у вас есть желание помочь в развитии данной погребени, то можете тыкнуть на кнопчеллу ниже и оставить коммент с координатами места, название растения что вы нашли и прикрепить пару фотографий. Я модератор не врот ебись, так что буду по мере возможности рассматривать ваши предложения и добавлять их на карту.
                    </div>
                    <a href="{{ route('suggestions.create') }}" class="button" id="leftbutton">Предложить растение</a>
                </div>
                <div class="comment opisanier">
                    <div>&nbsp Соответственно надеюсь на ваш здравый смысл и вы не будете кидать мне фотки членов, я конечно ничего против них не имею, сам с таким хожу и пользуюсь им постоянно, но желательно бы чтоб вы воздержались, ну или хотя бы давайте фильтровать эту хуйню. Если у вас есть лютое желание кинуть бредовую фотку куда-нибудь, то кнопка под этим абзацем специально для вас)
                    </div>
                    <a href="{{ route('fake_suggest.index') }}" class="button" id="rightbutton">Предложить хуйню</a>
                </div>
            </div>

        </div>
    </div>
</section>
<footer id="footer" class="footer">
</footer>
@endsection
