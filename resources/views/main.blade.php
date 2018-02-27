@extends('layouts.admin')

@section('main-content')
    {{--<div class="container">--}}
    {{--<div class="box">--}}
    {{--<a href="{{ route('main.edit') }}" class="btn btn-success" style="margin: 10px" >Изменить</a>--}}
    {{--<div class="box-header" style="display: flex;--}}
    {{--flex-direction: column;--}}
    {{--justify-content: space-between;">--}}
    {{--<h3 class="box-title">О Нас: </h3>--}}
    {{--{{ $main['about_text']}}--}}
    {{--<h3 class="box-title">Описание Крым: </h3>--}}
    {{--{{ $main['description_criemea']}}--}}
    {{--<h3 class="box-title">Описание Абхазия: </h3>--}}
    {{--{{ $main['description_abkhazia']}}--}}
    {{--<h3 class="box-title">Телефон: </h3>--}}
    {{--{{ $main['company_phone']}}--}}
    {{--<h3 class="box-title">E-mail: </h3>--}}
    {{--{{ $main['company_email']}}--}}
    {{--<h3 class="box-title">E-mail для заявок: </h3>--}}
    {{--{{ $main['leads_email']}}--}}

    {{--<h3 class="box-title">Ссылка на vk: </h3>--}}
    {{--{{ $main['link_vk']}}--}}
    {{--<h3 class="box-title">Ссылка на facebook:</h3>--}}
    {{--{{ $main['link_fb']}}--}}
    {{--<h3 class="box-title">Ссылка на instagram: </h3>--}}
    {{--{{ $main['link_inst']}}--}}

    {{--</div>--}}
    {{--<div class="box-header">--}}
    {{--<h3 class="box-title">Заголовок для видео: </h3>--}}
    {{--{{ $main['video_title']}}--}}
    {{--<div class="row justify-content-center">--}}
    {{--<iframe width="860" height="480" src="https://www.youtube.com/embed/{{ $main['video'] }}" frameborder="0"--}}
    {{--allow="autoplay; encrypted-media" allowfullscreen></iframe>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- /.box-body -->--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="container">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Основная информация</h3>
                <div class="box-tools">
                    <a href="{{ route('main.edit') }}" class="btn btn-primary">Изменить</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th>О Нас:</th>
                    </tr>
                    <tr>
                        <td>{{ $main['about_text']}}</td>
                    </tr>
                    <tr>
                        <th>Описание Крым:</th>
                    </tr>
                    <tr>
                        <td>{{ $main['description_criemea']}}</td>
                    </tr>
                    <tr>
                        <th>Описание Абхазия:</th>
                    </tr>
                    <tr>
                        <td>{{ $main['description_abkhazia']}}</td>
                    </tr>
                    <tr>
                        <th>Телефон:</th>
                    </tr>
                    <tr>
                        <td>{{ $main['company_phone']}}</td>
                    </tr>
                    <tr>
                        <th>E-mail:</th>
                    </tr>
                    <tr>
                        <td>{{ $main['company_email']}}</td>
                    </tr>
                    <tr>
                        <th>E-mail для заявок:</th>
                    </tr>
                    <tr>
                        <td>{{ $main['leads_email']}}</td>
                    </tr>
                    <tr>
                        <th>Ссылка на vk:</th>
                    </tr>
                    <tr>
                        <td>{{ $main['link_vk']}}</td>
                    </tr>
                    <tr>
                        <th>Ссылка на facebook:</th>
                    </tr>
                    <tr>
                        <td>{{ $main['link_fb']}}</td>
                    </tr>
                    <tr>
                        <th>Ссылка на instagram:</th>
                    </tr>
                    <tr>
                        <td>{{ $main['link_inst']}}</td>
                    </tr>
                    <tr>
                        <th>Заголовок для видео: {{ $main['video_title']}}</th>
                    </tr>
                    <tr>
                        <td>
                            <iframe width="860" height="480" src="https://www.youtube.com/embed/{{ $main['video'] }}"
                                    frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
@endsection