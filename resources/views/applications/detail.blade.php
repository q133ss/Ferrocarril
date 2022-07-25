@extends('layouts.app')
@section('title', 'Заявка')
@section('content')
    <div class="home__appliDetail">
        <div class="home__appliDetail-header"> <a class="home__appliDetail-back" href="{{route('applications.index')}}"> <img src="/assets/svg/back.svg" alt="icons">
                <p>Назад</p></a>
            <div class="home__appliDetail-title">Заявка №{{$app->id}}</div>
        </div>
        <div class="home__appliDetail-line"></div>
        <div class="home__appliDetail-blocks">
            <div class="customInput">
                <label class="customInput__label" for="appliDetailTypework">
                    <div class="customInput__title">Тип доставки</div>
                    <input type="text" placeholder="Введите тип доставки" value="{{$app->type}}" id="appliDetailTypework">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailValut">
                    <div class="customInput__title">Валюта платежа</div>
                    <input type="text" placeholder="Введите валюта платежа" value="{{$app->currency}}" id="appliDetailValut">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailPod">
                    <div class="customInput__title">Род подвижного состава / тип контейнера</div>
                    <input placeholder="Введите состав / род" type="text" value="{{$app->genus}}" id="appliDetailPod">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailSostav">
                    <div class="customInput__title">Принадлежность подвижного состава</div>
                    <input type="text" placeholder="Введите подвижного состава" value="{{$app->comp}}" id="appliDetailSostav">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="datapicker">
                    <div class="customInput__title">Дата готовности груза</div>
                    <input type="text" id="datepicker" placeholder="Введите дату" value="{{$app->date}}">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailCountry">
                    <div class="customInput__title">Страна отравления</div>
                    <input type="text" placeholder="Введите страну отравления" value="{{$app->country_sender}}" id="appliDetailCountry">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailStan">
                    <div class="customInput__title">Станция отправления</div>
                    <input placeholder="Введите станцую отправления" type="text" value="{{$app->station_sender}}" id="appliDetailStan">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailCountrys">
                    <div class="customInput__title">Страна назначения</div>
                    <input type="text" placeholder="Введите cтрану назначения" value="{{$app->country_receiver}}" id="appliDetailCountrys">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailStans">
                    <div class="customInput__title">Станция назначения</div>
                    <input type="text" placeholder="Введите станцую назначения" value="{{$app->station_receiver}}" id="appliDetailStans">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailInfos">
                    <div class="customInput__title">Грузоотправитель, ж.д. код., адрес, ОКПО\ИНН\Рег. номер</div>
                    <input type="text" placeholder="Введите текст" id="appliDetailInfos" value="{{$app->sender}}">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailInfo">
                    <div class="customInput__title">Грузополучатель, ж.д. код., адрес, ОКПО\ИНН\Рег. номер</div>
                    <input type="text" placeholder="Введите текст" id="appliDetailInfo" value="{{$app->receiver}}">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailCode">
                    <div class="customInput__title">Наименование, код груза по ГНГ/ЕТСНГ</div>
                    <input type="text" placeholder="Введите наименование" id="appliDetailCode" value="{{$app->code_cargo}}">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailCount">
                    <div class="customInput__title">Расчетный вес/количество тон</div>
                    <input type="text" placeholder="Введите вес / количество" id="appliDetailCount" value="{{$app->weight}}">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailIf">
                    <div class="customInput__title">Условия перевозки</div>
                    <input type="text" placeholder="Введите условия перевозки" id="appliDetailIf" value="{{$app->terms}}">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailCount">
                    <div class="customInput__title">Количество/номера вагонов или авто</div>
                    <input placeholder="Введите номер / количество" type="text" id="appliDetailCount" value="{{$app->qty}}">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailIran">
                    <div class="customInput__title">Плательщики по железным дорогам следования груза</div>
                    <input type="text" placeholder="Введите текст" id="appliDetailIran" value="{{$app->payer}}">
                </label>
            </div>
            <div class="customTextarea">
                <label class="customTextarea__label" for="appliDetailAdd">
                    <div class="customTextarea__title">Примечания</div>
                    <textarea placeholder="Введите примечания" id="appliDetailAdd">{{$app->notes}}</textarea>
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailPogrus">
                    <div class="customInput__title">Погрузка/выгрузка</div>
                    <input type="text" placeholder="Введите ответ" id="appliDetailPogrus" value="{{$app->loading}}">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailKZT">
                    <div class="customInput__title">Стоимость KZT</div>
                    <input type="text" placeholder="Введите стоимость KZT" id="appliDetailKZT" value="{{$app->cost_in_kzt}}">
                </label>
            </div>
            <div class="customInput">
                <label class="customInput__label" for="appliDetailDates">
                    <div class="customInput__title">Период подачи</div>
                    <input type="text" placeholder="Введите период подачи" id="appliDetailDates" value="{{$app->period}}">
                </label>
            </div>
        </div>
        <form action="{{route('applications.hide', $app->id)}}" method="POST">
            @csrf
            <button type="submit" class="home__appliDetail-btn">Скрыть жалобу</button>
        </form>
    </div>
@endsection
