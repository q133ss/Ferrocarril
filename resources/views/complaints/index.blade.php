@extends('layouts.app')
@section('title', 'Жалобы')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <div class="home__reportList">
        <div class="home__reportList-tabs">
            <a class="home__reportList-tab @if(Route::currentRouteName() == 'complaints.index') home__reportList-tab__a @endif" href="{{route('complaints.index')}}">
                <h5>Новые жалобы</h5>
                <span>{{App\Models\Complaint::where('is_new', 1)->count()}}</span>
            </a>
            <a class="home__reportList-tab @if(Route::currentRouteName() == 'complaints.history') home__reportList-tab__a @endif" href="{{route('complaints.history')}}">
                <h5>История жалоб</h5>
            </a>
        </div>
        <div class="home__reportList-line"></div>
        <div class="home__reportList-search">
            <label class="home__reportList-label" for="reportSearch"><img class="home__reportList-decor" src="/assets/svg/search.svg" alt="icon">
                <input class="home__reportList-input" oninput="search(this.value)" type="text" placeholder="Поиск"><img class="home__reportList-decor" src="/assets/svg/close.svg" alt="icon">
            </label>
        </div>
        <div class="home__reportList-lines"></div>
        <div class="home__reportList-list">
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
        </div>
    </div>

    <script>
        function search(search){
            $.ajax({
                url: '{{route('complaints.search')}}',
                method: 'post',
                data: {search: search},
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data){
                    $('.home__reportList-list').html(data)
                }
            });
        }
    </script>
@endsection
