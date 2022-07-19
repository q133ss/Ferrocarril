@extends('layouts.app')
@section('title', 'Аккаунт')
@section('content')
    <div class="home__account">
        <div class="home__account-title">Настройки аккаунта</div>
        <div class="home__account-line"> </div>
        <div class="home__account-blocks">
            <div class="customInput">
                <label class="customInput__label" for="accountEmail">
                    <div class="customInput__title">Почта</div>
                    <input type="text" placeholder="Введите почту" id="accountEmail">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="accountPassword">
                    <div class="customInput__title">Новый пароль</div>
                    <input type="text" placeholder="Введите новый пароль" id="accountPassword">
                </label>
            </div>
        </div>
        <button class="home__account-btn">Сохранить</button>
    </div>
@endsection
