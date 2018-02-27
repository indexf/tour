@extends('layouts.admin')

@section('main-content')
    {{--<div class="container">--}}
        {{--<form action="{{ route('main.update',['id'=>1]) }}" method="post" enctype="multipart/form-data">--}}
            {{--<div class="box-body" style="display: flex;--}}
                                                {{--flex-direction: column;--}}
                                                {{--width: 300px;--}}
                                                {{--height: 680px;--}}
                                                {{--justify-content: space-between;">--}}
                {{--<label style="margin-top: 10px">О нас:</label>--}}
                {{--<textarea type="text"  name="about_text" style="width: 400px; height: 150px" >{{ $main['about_text'] }}</textarea>--}}
                {{--<label style="margin-top: 10px">Описание Крым:</label>--}}
                {{--<textarea type="text"  name="description_criemea" style="width: 400px; height: 150px" >{{ $main['description_criemea'] }}</textarea>--}}
                {{--<label style="margin-top: 10px">Описание Абхазия:</label>--}}
                {{--<textarea type="text"  name="description_abkhazia" style="width: 400px; height: 150px" >{{ $main['description_abkhazia'] }}</textarea>--}}
                {{--<label style="margin-top: 10px"> Телефон:</label>--}}
                {{--<input type="text"  name="company_phone" required  value="{{ $main['company_phone'] }}">--}}
                {{--<label style="margin-top: 10px"> E-mail:</label>--}}
                {{--<input type="text"  name="company_email" required  value="{{ $main['company_email'] }}">--}}
                {{--<label style="margin-top: 10px"> E-mail для заявок:</label>--}}
                {{--<input type="text"  name="leads_email" required  value="{{ $main['leads_email'] }}">--}}

                {{--<label style="margin-top: 10px"> Ссылка на vk:</label>--}}
                {{--<input type="text"  name="link_vk" required  value="{{ $main['link_vk'] }}">--}}
                {{--<label style="margin-top: 10px"> Ссылка на facebook:</label>--}}
                {{--<input type="text"  name="link_fb" required  value="{{ $main['link_fb'] }}">--}}
                {{--<label style="margin-top: 10px"> Ссылка на instagram:</label>--}}
                {{--<input type="text"  name="link_inst" required  value="{{ $main['link_inst'] }}">--}}

                {{--<label style="margin-top: 10px"> Заголовок для видео:</label>--}}
                {{--<input type="text"  name="video_title"   value="{{ $main['video_title'] }}">--}}
                {{--<label style="margin-top: 10px"> Видео(ссылка с Youtube):</label>--}}
                {{--<input type="text"  name="video" style="width: 400px;"   value="https://www.youtube.com/embed/{{ $main['video'] }}">--}}

                {{--<input type="submit"  value="Сохранить" name="submit" class="btn btn-success" style="margin-top: 5px">--}}

                {{--<input type="hidden" value="{{ csrf_token()}}" name="_token" >--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<a href="{{ route('main')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>--}}
    {{--</div>--}}

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Основная информация редактировать</h3>
        </div>
        <form role="form" action="{{ route('main.update',['id'=>1]) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            <div class="box-body" >
                <div class="form-group">
                    <label class="">О нас:</label>
                    <textarea rows="3" class="form-control" type="text" name="about_text" >{{ $main['about_text'] }}</textarea>
                </div>
                <div class="form-group">
                    <label>Описание Крым:</label>
                    <textarea rows="3" class="form-control" type="text" name="description_criemea">{{ $main['description_criemea'] }}</textarea>
                </div>
                <div class="form-group">
                    <label>Описание Абхазия:</label>
                    <textarea rows="3" class="form-control" type="text"  name="description_abkhazia">{{ $main['description_abkhazia'] }}</textarea>
                </div>
                <div class="form-group">
                    <label>Телефон:</label>
                    <input class="form-control" type="text"  name="company_phone" required  value="{{ $main['company_phone'] }}">
                </div>
                <div class="form-group">
                    <label> E-mail:</label>
                    <input class="form-control" type="text" name="company_email" required  value="{{ $main['company_email'] }}">
                </div>
                <div class="form-group">
                    <label> E-mail для заявок:</label>
                    <input class="form-control" type="text"  name="leads_email" value="{{ $main['leads_email'] }}">
                </div>
                <div class="form-group">
                    <label>Ссылка на vk:</label>
                    <input class="form-control" type="text"  name="link_vk" required  value="{{ $main['link_vk'] }}">
                </div>
                <div class="form-group">
                    <label> Ссылка на facebook:</label>
                    <input class="form-control" type="text"  name="link_fb"  required value="{{ $main['link_fb'] }}">
                </div>
                <div class="form-group">
                    <label> Ссылка на instagram:</label>
                    <input class="form-control" type="text"  name="link_inst"  required value="{{ $main['link_inst'] }}">
                </div>
                <div class="form-group">
                    <label> Заголовок для видео:</label>
                    <input class="form-control" type="text"  name="video_title"   value="{{ $main['video_title'] }}">
                </div>
                <div class="form-group">
                    <label> Видео(ссылка с Youtube):</label>
                    <input class="form-control" type="text" name="video" value="https://www.youtube.com/embed/{{ $main['video'] }}">
                </div>
                <div class="text-right">
                    <input type="submit"  value="Сохранить" name="submit" class="btn btn-primary">
                    <a href="{{ route('main')}}"  class="btn btn-danger">Отмена</a>
                </div>
            </div>
        </form>
    </div>
@endsection