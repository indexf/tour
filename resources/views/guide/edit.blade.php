@extends('layouts.admin')

@section('main-content')
    {{--<div class="container">--}}
        {{--<form action="{{ route('guide.update',['id'=>$guide['id']]) }}" method="post" enctype="multipart/form-data">--}}
            {{--<div class="box-body" style="display: flex;--}}
                                                {{--flex-direction: column;--}}
                                                {{--width: 300px;--}}
                                                {{--height: 600px;--}}
                                                {{--justify-content: space-between;">--}}

                {{--<label for="">Имя:</label>--}}
                {{--<input type="text"  name="name"  required placeholder="Имя" value="{{ $guide['name'] }}">--}}
                {{--<label for="">Описание:</label>--}}
                {{--<textarea type="text"  name="description"  required placeholder="Описание">{{ $guide['description'] }}</textarea>--}}
                {{--<label>Аватар:</label>--}}
                {{--<input type="file"  name="file"  class="btn-default">--}}
                {{--<label for="">VK:</label>--}}
                {{--<input type="text"  name="link_vk" placeholder="Имя" value="{{ $guide['link_vk'] }}">--}}
                {{--<label for="">Facebook:</label>--}}
                {{--<input type="text"  name="link_fb" placeholder="Имя" value="{{ $guide['link_fb'] }}">--}}
                {{--<label for="">Instagram:</label>--}}
                {{--<input type="text"  name="link_inst"  placeholder="Имя" value="{{ $guide['link_inst'] }}">--}}

                {{--<input type="submit"  value="Сохранить" name="submit" class="btn btn-success" style="margin-top: 5px">--}}
                {{--<input type="hidden" value="{{ csrf_token()}}" name="_token" >--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<a href="{{ route('atour')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>--}}
    {{--</div>--}}

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Редактировать гида</h3>
        </div>
        <form action="{{ route('guide.update',['id'=>$guide['id']]) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            <div class="box-body">
                <div class="form-group">
                    <label for="">Имя:</label>
                    <input class="form-control" type="text"  name="name"  required placeholder="Имя" value="{{ $guide['name'] }}">
                </div>
                <div class="form-group">
                    <label for="">Описание:</label>
                    <textarea class="form-control" type="text"  name="description"  required placeholder="Описание">{{ $guide['description'] }}</textarea>
                </div>
                <div class="form-group">
                    <label>Аватар:</label>
                    <input type="file"  name="file"  class="btn-default">
                </div>
                <div class="form-group">
                    <label for="">VK:</label>
                    <input class="form-control" type="text"  name="link_vk" placeholder="Имя" value="{{ $guide['link_vk'] }}">
                </div>
                <div class="form-group">
                    <label for="">Facebook:</label>
                    <input class="form-control" type="text"  name="link_fb" placeholder="Имя" value="{{ $guide['link_fb'] }}">
                </div>
                <div class="form-group">
                    <label for="">Instagram:</label>
                    <input class="form-control" type="text"  name="link_inst"  placeholder="Имя" value="{{ $guide['link_inst'] }}">
                </div>
                <div class="text-right">
                    <input type="submit"  value="Сохранить" name="submit" class="btn btn-primary">
                    <a href="{{ route('atour')}}"  class="btn btn-danger">Отмена</a>
                </div>
            </div>
        </form>
    </div>
@endsection