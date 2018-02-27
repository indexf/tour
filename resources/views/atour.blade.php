@extends('layouts.admin')

@section('main-content')
  

        <div class="box" style="overflow-x: scroll;overflow-y: scroll;height:600px;">
            <div class="box-header">
                <h3 class="box-title">Туры:</h3>
                <div class="box-tools">
                    <a href="{{ route('atour.create') }}" class="btn btn-success">Добавить</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>Заголовок</th>
                            <th>Превью тура</th>
                            <th>Основное фото</th>
                            <th>Группа</th>
                            <th>Описание</th>
                            <th>В стоимость включено</th>
                            <th>Тур Это</th>
                            <th>Доп информация</th>
                            <th>Маршрут</th>
                            <th>Цена</th>
                            <th>Видео</th>
                            <th>Заголовок видео</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($tours)
                            @foreach($tours as $tour)
                                <tr>
                                    <td>{{ $tour['name']}}</td>
                                    <td>{{ $tour['page_title']}}</td>
                                    <td><img style="width: 200px;" src="../img/content/atour/{{ $tour['avatar']}}" alt="img"></td>
                                    <td><img style="width: 200px;" src="../img/content/atour/{{ $tour['main_img']}}" alt="img"></td>
                                    <td>{{ $tour['group']}}</td>
                                    <td>{{ $tour['description']}}</td>
                                    <td>{{ $tour['tour_included']}}</td>
                                    <td>{{ $tour['tour_this']}}</td>
                                    <td>{{ $tour['price_included']}}</td>
                                    <td>{{ $tour['route']}}</td>
                                    <td>{{ $tour['price']}}</td>
                                    <td>
                                        @if($tour['video'] != "")
                                            https://www.youtube.com/embed/{{ $tour['video']}}
                                        @endif
                                    </td>
                                    <td>{{ $tour['video_title']}}</td>

                                    <td>{!! Form::open(['method' => 'DELETE',
                                                        'route'  =>['atour.destroy',
                                                        $tour['id']]
                                                ])!!}
                                        <button class="btn btn-default" onclick="return confirm('Удалить тур?')"><i class="glyphicon glyphicon-remove"></i></button>
                                        {!! Form::close() !!}
                                        <a href="{{ url('home/atour/edit?id='.$tour['id']) }}">
                                            <button class="btn btn-default"><i class="glyphicon glyphicon-edit"></i></button>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Название</th>
                            <th>Заголовок</th>
                            <th>Превьюшка</th>
                            <th>Основное фото</th>
                            <th>Группа</th>
                            <th>Описание</th>
                            <th>В стоимость включено</th>
                            <th>Тур Это</th>
                            <th>Доп информация</th>
                            <th>Маршрут</th>
                            <th>Цена</th>
                            <th>Видео</th>
                            <th>Заголовок видео</th>
                            <th>Действия</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
@endsection