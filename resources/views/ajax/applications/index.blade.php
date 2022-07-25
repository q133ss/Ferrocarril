@foreach($applications as $app)
    <a class="home__appliList-item" href="{{route('applications.detail', $app->id)}}">
        <ul class="home__appliList-nav">
            <li class="home__appliList-nav__i">Номер заявки</li>
            <li class="home__appliList-nav__i">Грузоотправитель</li>
            <li class="home__appliList-nav__i">Грузополучатель</li>
        </ul>
        <ul class="home__appliList-content">
            <li class="home__appliList-content__i">Заявка №{{$app->id}}</li>
            <li class="home__appliList-content__i">{{$app->sender}}</li>
            <li class="home__appliList-content__i">{{$app->receiver}}</li>
        </ul>
    </a>
@endforeach
