@extends('layouts.admin')

@section('main-content')
    {{--<div class="container">--}}
        {{--<form action="{{ route('instagram.upload') }}" method="post" enctype="multipart/form-data">--}}
            {{--<div class="box-body" style="display: flex;--}}
                                                {{--flex-direction: column;--}}
                                                {{--width: 300px;--}}
                                                {{--height: 200px;--}}
                                                {{--justify-content: space-between;">--}}
                {{--<label>Выбирете файл:</label>--}}
                {{--<input type="file"  name="file"  class="btn-default" required>--}}
                {{--<label>Ссылка на instagram:</label>--}}
                {{--<input type="text"  name="link"  required placeholder="Ссылка на instagram">--}}
                {{--<input type="submit"  value="Загрузить" name="submit" class="btn btn-success" style="margin-top: 5px">--}}
                {{--<input type="hidden" value="{{ csrf_token()}}" name="_token" >--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<a href="{{ route('instagram')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>--}}
    {{--</div>--}}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавить instagram</h3>
        </div>
        <form action="{{ route('instagram.upload') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            <div class="box-body">
                <div class="form-group">
                    <label>Выбирете файл:</label>
                    <input type="file"  name="file"  class="btn-default" required>
                </div>
                <div class="form-group">
                    <label>Ссылка на instagram:</label>
                    <input class="form-control" type="text"  name="link"  required placeholder="Ссылка на instagram">
                </div>
                <div class="text-right">
                    <input type="submit"  value="Загрузить" name="submit" class="btn btn-primary">
                    <a href="{{ route('instagram')}}"  class="btn btn-danger">Отмена</a>
                </div>
            </div>
        </form>
    </div>
@endsection