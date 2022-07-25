@extends('layouts.app')
@section('title', 'Жалоба')
@section('content')
    <div class="home__reportDetail">
        <div class="home__reportDetail-header"> <a class="home__reportDetail-back" href="/"> <img src="/assets/svg/back.svg" alt="icons">
                <p>Назад</p></a>
            <div class="home__reportDetail-title">Жалоба №{{$comp->id}}</div>
        </div>
        <div class="home__reportDetail-line"></div>
        <div class="home__reportDetail-blocks">
            <div class="customInput">
                <label class="customInput__label" for="reportDetailName">
                    <div class="customInput__title">Имя</div>
                    <input type="text" placeholder="Введите имя" value="{{$comp->name}}" id="reportDetailName">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="reportDetailCompany">
                    <div class="customInput__title">Наименовании компании</div>
                    <input type="text" placeholder="Введите имя компании" value="{{$comp->company}}" id="reportDetailCompany">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="mask__phone">
                    <div class="customInput__title">Номер телефона</div>
                    <input placeholder="Введите номер телефона" value="{{$comp->phone}}" type="tel" id="mask__phone">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="reportDetailMessage">
                    <div class="customInput__title">Сообщение</div>
                    <input type="text" value="{{$comp->message1}}" placeholder="Введите cообщение" id="reportDetailMessage">
                </label>
            </div>
            <div class="customTextarea">
                <label class="customTextarea__label" for="reportDetailMessage">
                    <div class="customTextarea__title">Сообщение</div>
                    <textarea placeholder="Введите сообщение" id="reportDetailMessage">{{$comp->message2}}</textarea>
                </label>
            </div>
        </div>
        <form action="{{route('complaints.hide', $comp->id)}}" method="POST">
            @csrf
        <button type="submit" class="home__reportDetail-btn">Скрыть жалобу</button>
        </form>
    </div>
@endsection
