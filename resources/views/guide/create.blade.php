@extends('layouts.admin')

@section('main-content')
    {{--<div class="container">--}}
        {{--<form action="{{ route('guide.upload') }}" method="post" enctype="multipart/form-data">--}}
            {{--<div class="box-body" style="display: flex;--}}
                                                {{--flex-direction: column;--}}
                                                {{--width: 300px;--}}
                                                {{--height: 600px;--}}
                                                {{--justify-content: space-between;">--}}
                {{--<label for="">Имя:</label>--}}
                {{--<input type="text"  name="name"  required placeholder="Имя">--}}

                {{--<label for="">Описание:</label>--}}
                {{--<textarea type="text"  name="description"  required placeholder="Описание"></textarea>--}}

                {{--<label>Аватар:</label>--}}
                {{--<input type="file"  name="file"  class="btn-default" required>--}}

                {{--<label for="">VK:</label>--}}
                {{--<input type="text"  name="link_vk" placeholder="Имя">--}}
                {{--<label for="">Facebook:</label>--}}
                {{--<input type="text"  name="link_fb" placeholder="Имя">--}}
                {{--<label for="">Instagram:</label>--}}
                {{--<input type="text"  name="link_inst"  placeholder="Имя">--}}

                {{--<input type="submit"  value="Сохранить" name="submit" class="btn btn-success" style="margin-top: 5px">--}}
                {{--<input type="hidden" value="{{ csrf_token()}}" name="_token" >--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<a href="{{ route('guide')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>--}}
    {{--</div>--}}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавить гида</h3>
        </div>
        <form action="{{ route('guide.upload') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            <div class="box-body">
                <div class="form-group">
                    <label for="">Имя:</label>
                    <input class="form-control" type="text"  name="name"  required placeholder="Имя">
                </div>
                <div class="form-group">
                    <label for="">Описание:</label>
                    <textarea class="form-control" type="text"  name="description"  required placeholder="Описание"></textarea>
                </div>
                <div class="form-group">
                    <label>Аватар:</label>
                    <input type="file" name="file"  class="btn-default" required>
                </div>
                <div class="form-group">
                    <label for="">VK:</label>
                    <input class="form-control" type="text"  name="link_vk" placeholder="Имя">
                </div>
                <div class="form-group">
                    <label for="">Facebook:</label>
                    <input class="form-control" type="text"  name="link_fb" placeholder="Имя">
                </div>
                <div class="form-group">
                    <label for="">Instagram:</label>
                    <input class="form-control" type="text"  name="link_inst"  placeholder="Имя">
                </div>
                <div class="text-right">
                    <input type="submit"  value="Сохранить" name="submit" class="btn btn-primary">
                    <a href="{{ route('guide')}}"  class="btn btn-danger">Отмена</a>
                </div>
            </div>
        </form>
    </div>
@endsection