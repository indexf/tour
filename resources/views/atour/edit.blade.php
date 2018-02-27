@extends('layouts.admin')

@section('main-content')
    {{--<div class="container">--}}
        {{--<form action="{{ route('atour.update',['id'=>$tour['id']]) }}" method="post" enctype="multipart/form-data">--}}
            {{--<div class="box-body" style="display: flex;--}}
                                                {{--flex-direction: column;--}}
                                                {{--width: 300px;--}}
                                                {{--height: 600px;--}}
                                                {{--justify-content: space-between;">--}}
                {{--<input type="text"  name="name"   placeholder="Название тура" value="{{ $tour['name'] }}">--}}
                {{--<input type="text"  name="page_title"   placeholder="Заголовок страницы" value="{{ $tour['page_title'] }}">--}}
                {{--<label for="">Превью тура:</label>--}}
                {{--<input type="file"  name="avatar" class="btn-default">--}}
                {{--<label for="">Основное фото:</label>--}}
                {{--<input type="file"  name="main_img" class="btn-default" required>--}}
                {{--<textarea type="text"  name="description"   placeholder="Описание">{{ $tour['description'] }}"</textarea>--}}
                {{--<textarea type="text"  name="tour_included"   placeholder="Входит в тур"> {{ $tour['tour_included'] }}"</textarea>--}}
                {{--<textarea type="text"  name="price_included"   placeholder="Входит в цену">{{ $tour['price_included'] }}"</textarea>--}}
                {{--<textarea type="text"  name="route"   placeholder="Маршрут">{{ $tour['route'] }}"</textarea>--}}
                {{--<input type="text"  name="price"   placeholder="Цена" value="{{ $tour['price'] }}">--}}
                {{--<input type="text"  name="video"   placeholder="Видео(ссылка на ютюб)" value="https://www.youtube.com/embed/{{ $tour['video'] }}">--}}
                {{--<input type="text"  name="video_title"   placeholder="Заголовок видео" value="{{ $tour['video_title'] }}">--}}

                {{--<select name="social_icon">--}}
                    {{--@if($tour['group'] == 'Crimea' )--}}
                        {{--<option value = "Crimea" selected>Крым</option>--}}
                        {{--<option value = "Abkhazia">Абхазия</option>--}}
                    {{--@else--}}
                        {{--<option value = "Crimea" >Крым</option>--}}
                        {{--<option value = "Abkhazia" selected>Абхазия</option>--}}
                    {{--@endif--}}
                {{--</select>--}}
                {{--<input type="submit"  value="Сохранить" name="submit" class="btn btn-success" style="margin-top: 5px">--}}
                {{--<input type="hidden" value="{{ csrf_token()}}" name="_token" >--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<a href="{{ route('atour')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>--}}
    {{--</div>--}}

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Редактировать тур</h3>
        </div>
        <form role="form" action="{{ route('atour.update',['id'=>$tour['id']]) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            <div class="box-body">
                <div class="form-group">
                    <label for="">Название тура</label>
                    <input class="form-control" type="text" name="name" placeholder="Название тура" value="{{ $tour['name'] }}">
                </div>
                <div class="form-group">
                    <label for="">Заголовок страницы</label>
                    <input class="form-control" type="text" name="page_title" placeholder="Заголовок страницы" value="{{ $tour['page_title'] }}">
                </div>
                <div class="form-group">
                    <label for="">Превью тура:</label>
                    <input type="file" name="avatar" class="btn-default" >
                </div>
                <div class="form-group">
                    <label for="">Основное фото:</label>
                    <input type="file" name="main_img" class="btn-default" >
                </div>
                <div class="form-group">
                    <label for="">Описание</label>
                    <textarea class="form-control" type="text"  name="description"   placeholder="Описание">{{ $tour['description'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">В стоимость включено</label>
                    <textarea class="form-control" type="text"  name="price_included"   placeholder="Входит в тур"> {{ $tour['price_included'] }}</textarea>
                </div>
              <div class="form-group">
                    <label for="">Тур Это</label>
                    <textarea class="form-control" type="text"  name="tour_this"   placeholder="Входит в тур"> {{ $tour['tour_this'] }}</textarea>
                </div>
              	<div class="form-group">
                    <label for="">Входит в тур</label>
                    <textarea class="form-control" type="text"  name="tour_included"   placeholder="Входит в тур"> {{ $tour['tour_included'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Маршрут</label>
                    <textarea class="form-control" type="text"  name="route"   placeholder="Маршрут">{{ $tour['route'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Цена</label>
                    <input class="form-control" type="text"  name="price"   placeholder="Цена" value="{{ $tour['price'] }}">
                </div>
                <div class="form-group">
                    <label for="">Видео(ссылка на ютюб)</label>
                    <input class="form-control" type="text"  name="video"   placeholder="Видео(ссылка на ютюб)" value="https://www.youtube.com/embed/{{ $tour['video'] }}">
                </div>
                <div class="form-group">
                    <label for="">Заголовок видео</label>
                    <input class="form-control" type="text"  name="video_title"   placeholder="Заголовок видео" value="{{ $tour['video_title'] }}">
                </div>
                <div class="form-group">
                    <select class="form-control"  name='group'>
                        @if($tour['group'] == 'Crimea')
                            <option value ="Crimea" selected>Крым</option>
                            <option value ="Abkhazia">Абхазия</option>
                        @else
                            <option value ="Crimea" >Крым</option>
                            <option value ="Abkhazia" selected>Абхазия</option>
                        @endif
                    </select>
                </div>
                <div class="text-right">
                    <input type="submit"  value="Сохранить" name="submit" class="btn btn-primary">
                    <a href="{{ route('atour')}}"  class="btn btn-danger">Отмена</a>
                </div>
            </div>
        </form>
    </div>
@endsection