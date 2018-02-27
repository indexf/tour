@extends('layouts.admin')

@section('main-content')
    {{--<div class="container">--}}
        {{--<form action="{{ route('atour.upload') }}" method="post" enctype="multipart/form-data">--}}
            {{--<div class="box-body" style="display: flex;--}}
                                                {{--flex-direction: column;--}}
                                                {{--width: 300px;--}}
                                                {{--height: 600px;--}}
                                                {{--justify-content: space-between;">--}}
                {{--<input type="text"  name="name"  required placeholder="Название тура">--}}
                {{--<input type="text"  name="page_title"  required placeholder="Заголовок страницы">--}}
                {{--<label for="">Превью тура:</label>--}}
                {{--<input type="file"  name="avatar" class="btn-default" required>--}}
                {{--<label for="">Основное фото:</label>--}}
                {{--<input type="file"  name="main_img" class="btn-default" required>--}}
                {{--<textarea type="text"  name="description"  required placeholder="Описание"></textarea>--}}
                {{--<textarea type="text"  name="tour_included"  required placeholder="Входит в тур"></textarea>--}}
                {{--<textarea type="text"  name="price_included"  required placeholder="Входит в цену"></textarea>--}}
                {{--<textarea type="text"  name="route"  required placeholder="Маршрут"></textarea>--}}
                {{--<input type="text"  name="price"  required placeholder="Цена">--}}
                {{--<input type="text"  name="video"  required placeholder="Видео(ссылка на ютюб)">--}}
                {{--<input type="text"  name="video_title"  required placeholder="Заголовок видео">--}}
                {{--<select name="group">--}}
                    {{--<option value = "Crimea">Крым</option>--}}
                    {{--<option value = "Abkhazia">Абхазия</option>--}}
                {{--</select>--}}

                {{--<input type="submit"  value="Сохранить" name="submit" class="btn btn-success" style="margin-top: 5px">--}}
                {{--<input type="hidden" value="{{ csrf_token()}}" name="_token" >--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<a href="{{ route('atour')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>--}}
    {{--</div>--}}

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавить тур</h3>
        </div>
        <form role="form" action="{{ route('atour.upload') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            <div class="box-body">
                <div class="form-group">
                    <label for="">Название тура</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Название тура" required>
                </div>
                <div class="form-group">
                    <label for="">Заголовок страницы</label>
                    <input type="text" name="page_title" id="" class="form-control" placeholder="Заголовок страницы" required>
                </div>
                <div class="form-group">
                    <label for="">Превью тура:</label>
                    <input type="file" name="avatar" id="" class="btn-default" required>
                </div>
                <div class="form-group">
                    <label for="">Основное фото:</label>
                    <input type="file" name="main_img" id="" class="btn-default" required>
                </div>
                <div class="form-group">
                    <label for="">Описание</label>
                    <textarea rows="3" type="text" name="description" id="" class="form-control" placeholder="Описание" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">В стоимость включено</label>
                    <textarea rows="3" type="text" name="price_included" id="" class="form-control" placeholder="Входит в тур" required></textarea>
                </div>
              <div class="form-group">
                    <label for="">Тур Это</label>
                    <textarea rows="3" type="text" name="tour_this" id="" class="form-control" placeholder="Входит в тур" required></textarea>
                </div>
              
                <div class="form-group">
                    <label for="">Доп информация</label>
                    <textarea name="tour_included" id="" class="form-control" rows="3" placeholder="Входит в цену" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Маршрут</label>
                    <textarea name="route" id="" class="form-control" rows="3" placeholder="Маршрут" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Цена</label>
                    <input type="text" name="price" id="" class="form-control" placeholder="Цена" required>
                </div>
                <div class="form-group">
                    <label for="">Видео(ссылка на ютюб)</label>
                    <input type="text" name="video" id="" class="form-control" placeholder="Видео(ссылка на ютюб)">
                </div>
                <div class="form-group">
                    <label for="">Заголовок видео</label>
                    <input type="text" name="video_title" id="" class="form-control" placeholder="Заголовок видео">
                </div>
                <div class="form-group">
                    <select name="group" id="" class="form-control">
                        <option value="Crimea">Крым</option>
                        <option value="Abkhazia">Абхазия</option>
                    </select>
                </div>
                <div class="text-right">
                    <button type="submit" name="submit" class="btn btn-primary">Сохранить</button>
                    <a href="{{ route('atour')}}"  class="btn btn-danger">Отмена</a>
                </div>
            </div>
        </form>
    </div>
@endsection