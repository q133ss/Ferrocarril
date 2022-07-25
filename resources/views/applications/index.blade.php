@extends('layouts.app')
@section('title')
@if(Route::currentRouteName() == 'applications.index')Заявки@elseИстория@endif
@endsection
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <div class="home__appliList">
        <div class="home__appliList-tabs">
            <a class="home__appliList-tab @if(Route::currentRouteName() == 'applications.index') home__appliList-tab__a @endif" href="{{route('applications.index')}}">
                <h5>Новые заявки</h5>
                @if(Route::currentRouteName() == 'applications.index')
                    <span>{{$applications->count()}}</span>
                @else
                    <span>{{App\Models\Application::where('is_new',1)->count()}}</span>
                @endif
            </a>
            <a class="home__appliList-tab @if(Route::currentRouteName() == 'applications.history') home__appliList-tab__a @endif" href="{{route('applications.history')}}">
                <h5>История заявок</h5>
            </a>
        </div>
        <div class="home__appliList-line"></div>
        <div class="home__appliList-search">
            <label class="home__appliList-label" for="appliSearch"><img class="home__appliList-decor" src="/assets/svg/search.svg" alt="icon">
                <input class="home__appliList-input" oninput="search(this.value)" type="text" placeholder="Поиск"><img class="home__appliList-decor" src="/assets/svg/close.svg" alt="icon">
            </label>
        </div>
        <div class="home__appliList-lines"></div>
        <div class="home__appliList-list">
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
        </div>
    </div>

    <script>
        function search(search){
            $.ajax({
                url: '{{route('applications.index.search')}}',
                method: 'post',
                data: {search: search},
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data){
                    $('.home__appliList-list').html(data)
                }
            });
        }
    </script>
@endsection
