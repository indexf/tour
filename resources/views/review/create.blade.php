@extends('layouts.admin')

@section('main-content')
    {{--<div class="container">--}}
        {{--<form action="{{ route('review.upload') }}" method="post" enctype="multipart/form-data">--}}
            {{--<div class="box-body" style="display: flex;--}}
                                                {{--flex-direction: column;--}}
                                                {{--width: 300px;--}}
                                                {{--height: 600px;--}}
                                                {{--justify-content: space-between;">--}}
                {{--<label for="">Имя:</label>--}}
                {{--<input type="text"  name="name"  required placeholder="Имя">--}}

                {{--<label for="">Текст:</label>--}}
                {{--<textarea type="text"  name="text"  required placeholder="Описание"></textarea>--}}

                {{--<label for="">Соцсеть:</label>--}}
                {{--<select name="social_icon">--}}
                    {{--<option value = "vk">VK</option>--}}
                    {{--<option value = "fb">Facebok</option>--}}
                    {{--<option value = "inst">Instagram</option>--}}
                {{--</select>--}}

                {{--<label>Аватар:</label>--}}
                {{--<input type="file"  name="file"  class="btn-default" required>--}}

                {{--<input type="submit"  value="Сохранить" name="submit" class="btn btn-success" style="margin-top: 5px">--}}
                {{--<input type="hidden" value="{{ csrf_token()}}" name="_token" >--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<a href="{{ route('review')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>--}}
    {{--</div>--}}

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавить отзыв</h3>
        </div>
        <form action="{{ route('review.upload') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            <div class="box-body">
                <div class="form-group">
                    <label for="">Имя:</label>
                    <input class="form-control" type="text"  name="name"  required placeholder="Имя">
                </div>
                <div class="form-group">
                    <label for="">Текст:</label>
                    <textarea rows="3" class="form-control" type="text"  name="text"  required placeholder="Описание"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Соцсеть:</label>
                    <select class="form-control" name="social_icon">
                        <option value = "vk">VK</option>
                        <option value = "fb">Facebok</option>
                        <option value = "inst">Instagram</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Аватар:</label>
                    <input type="file"  name="file"  class="btn-default" required>
                </div>
                <div class="text-right">
                    <input type="submit"  value="Сохранить" name="submit" class="btn btn-primary">
                    <a href="{{ route('review')}}"  class="btn btn-danger">Отмена</a>
                </div>


            </div>
        </form>
    </div>
@endsection