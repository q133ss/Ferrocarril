@foreach($complaints as $complaint)
    <a class="home__reportList-item" href="{{route('complaints.detail', $complaint->id)}}">
        <ul class="home__reportList-nav">
            <li class="home__reportList-nav__i">Номер жалобы</li>
            <li class="home__reportList-nav__i">Имя и Фамилия</li>
            <li class="home__reportList-nav__i">Наименование компании</li>
        </ul>
        <ul class="home__reportList-content">
            <li class="home__reportList-content__i">Жалоба №{{$complaint->id}}</li>
            <li class="home__reportList-content__i">{{$complaint->name}}</li>
            <li class="home__reportList-content__i">{{$complaint->company}}</li>
        </ul>
    </a>
@endforeach
