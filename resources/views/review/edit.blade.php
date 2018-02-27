@extends('layouts.admin')

@section('main-content')
    {{--<div class="container">--}}
        {{--<form action="{{ route('review.update',['id'=>$review['id']]) }}" method="post" enctype="multipart/form-data">--}}
            {{--<div class="box-body" style="display: flex;--}}
                                                {{--flex-direction: column;--}}
                                                {{--width: 300px;--}}
                                                {{--height: 600px;--}}
                                                {{--justify-content: space-between;">--}}

                {{--<label for="">Имя:</label>--}}
                {{--<input type="text"  name="name"  required placeholder="Имя" value="{{ $review['name'] }}>--}}

                {{--<label for="">Текст:</label>--}}
                {{--<textarea type="text"  name="text"  required placeholder="Описание">{{ $review['text'] }}</textarea>--}}

                {{--<label for="">Соцсеть:</label>--}}

                {{--<select name="social_icon">--}}
                    {{--@if($review['social_icon'] == 'vk')--}}
                        {{--<option value = "vk" selected>VK</option>--}}
                        {{--<option value = "fb">Facebok</option>--}}
                        {{--<option value = "inst">Instagram</option>--}}
                    {{--@endif--}}
                    {{--@if($review['social_icon'] == 'fb')--}}
                        {{--<option value = "vk" >VK</option>--}}
                        {{--<option value = "fb" selected>Facebok</option>--}}
                        {{--<option value = "inst">Instagram</option>--}}
                    {{--@endif--}}
                    {{--@if($review['social_icon'] == 'inst')--}}
                        {{--<option value = "vk" >VK</option>--}}
                        {{--<option value = "fb">Facebok</option>--}}
                        {{--<option value = "inst" selected>Instagram</option>--}}
                    {{--@endif--}}
                {{--</select>--}}

                {{--<label>Аватар:</label>--}}
                {{--<input type="file"  name="file"  class="btn-default" required>--}}

                {{--<input type="submit"  value="Сохранить" name="submit" class="btn btn-success" style="margin-top: 5px">--}}
                {{--<input type="hidden" value="{{ csrf_token()}}" name="_token" >--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<a href="{{ route('review')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>--}}
    {{--</div> --}}

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Редактировать отзыв</h3>
        </div>
        <form action="{{ route('review.update',['id'=>$review['id']]) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            <div class="box-body">
                <div class="form-group">
                    <label for="">Имя:</label>
                    <input class="form-control" type="text"  name="name"  required placeholder="Имя" value="{{ $review['name'] }}">
                </div>
                <div class="form-group">
                    <label>Текст:</label>
                    <textarea rows="3" class="form-control" type="text"  name="text"  required placeholder="Описание">{{ $review['text'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Соцсеть:</label>
                    <select class="form-control" name="social_icon">
                        @if($review['social_icon'] == 'vk')
                            <option value = "vk" selected>VK</option>
                            <option value = "fb">Facebok</option>
                            <option value = "inst">Instagram</option>
                        @endif
                        @if($review['social_icon'] == 'fb')
                            <option value = "vk" >VK</option>
                            <option value = "fb" selected>Facebok</option>
                            <option value = "inst">Instagram</option>
                        @endif
                        @if($review['social_icon'] == 'inst')
                            <option value = "vk" >VK</option>
                            <option value = "fb">Facebok</option>
                            <option value = "inst" selected>Instagram</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label>Аватар:</label>
                    <input type="file"  name="file"  class="btn-default">
                </div>
                <div class="text-right">
                    <input type="submit"  value="Сохранить" name="submit" class="btn btn-primary">
                    <a href="{{ route('review')}}"  class="btn btn-danger">Отмена</a>
                </div>
            </div>
        </form>
    </div>
@endsection