@extends('layouts.admin')

@section('main-content')
    {{--<div class="container">--}}
        {{--<form action="{{ route('photo.upload') }}" method="post" enctype="multipart/form-data">--}}
            {{--<div class="box-body" style="display: flex;--}}
                                                {{--flex-direction: column;--}}
                                                {{--width: 300px;--}}
                                                {{--height: 200px;--}}
                                                {{--justify-content: space-between;">--}}
                {{--<label>Выбирете файл:</label>--}}
                {{--<input type="file"  name="file"  class="btn-default" required>--}}
                {{--<select name="tour_id" required>--}}
                    {{--@if($tours)--}}
                        {{--@foreach($tours as $tour)--}}
                            {{--<option value = "{{ $tour['id'] }}">{{ $tour['name'] }}</option>--}}
                        {{--@endforeach--}}
                    {{--@endif--}}
                {{--</select>--}}
                {{--<input type="submit"  value="Загрузить" name="submit" class="btn btn-success" style="margin-top: 5px">--}}
                {{--<input type="hidden" value="{{ csrf_token()}}" name="_token" >--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<a href="{{ route('photo')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>--}}
    {{--</div>--}}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавить фото</h3>
        </div>
        <form action="{{ route('photo.upload') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            <div class="box-body">
                <div class="form-group">
                    <label>Выбирете файл:</label>
                    <input type="file"  name="file"  class="btn-default" required>
                </div>
                <div class="form-group">
                    <select name="tour_id" class="form-control" required>
                        @if($tours)
                            @foreach($tours as $tour)
                                <option value = "{{ $tour['id'] }}">{{ $tour['name'] }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="text-right">
                    <input type="submit"  value="Загрузить" name="submit" class="btn btn-primary">
                    <a href="{{ route('photo')}}"  class="btn btn-danger">Отмена</a>
                </div>
            </div>
        </form>
    </div>
@endsection