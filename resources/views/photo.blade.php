@extends('layouts.admin')

@section('main-content')
    {{--<div class="container">--}}
        {{--<div class="box">--}}
            {{--<div class="box-header">--}}
                {{--<h3 class="box-title">Фото:</h3>--}}
            {{--</div>--}}
            {{--<!-- /.box-header -->--}}
            {{--<div class="box-body">--}}
                {{--<table id="example1" class="table table-bordered table-striped">--}}
                    {{--<a href="{{ route('photo.create') }}" class="btn btn-success">Добавить</a>--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th>Фото</th>--}}
                        {{--<th>Тур</th>--}}
                        {{--<th>Действия</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--@if($photos)--}}
                        {{--@foreach($photos as $photo)--}}
                            {{--<tr>--}}
                                {{--<td><img src="../img/content/photo/{{ $photo['path']}}" alt="img" style="max-width: 600px;"></td>--}}
                                {{--<td>{{ $tours[$photo['tour_id']-1]['name']}}--}}
                                {{--</td>--}}
                                {{--<td>{!! Form::open(['method' => 'DELETE',--}}
                                    {{--'route' =>['photo.destroy', $photo['id']]])!!}--}}
                                    {{--<button onclick="return confirm('Удалить Фотографию?')"><i class="glyphicon glyphicon-remove"></i></button>--}}
                                    {{--{!! Form::close() !!}</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                    {{--@endif--}}
                    {{--</tbody>--}}
                    {{--<tfoot>--}}
                    {{--<tr>--}}
                        {{--<th>Фото</th>--}}
                        {{--<th>Тур</th>--}}
                        {{--<th>Действия</th>--}}
                    {{--</tr>--}}
                    {{--</tfoot>--}}
                {{--</table>--}}
            {{--</div>--}}
            {{--<!-- /.box-body -->--}}
        {{--</div>--}}
    {{--</div>--}}

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Фото:</h3>
                <div class="box-tools">
                    <a href="{{ route('photo.create') }}" class="btn btn-success">Добавить</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Фото</th>
                            <th>Тур</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($photos)
                            @foreach($photos as $photo)
                                <tr>
                                    <td><img style="width: 200px;" src="../img/content/photo/{{ $photo['path']}}" alt="img" style="max-width: 600px;"></td>
                                    <td><?php
 										foreach($tours as $item){
                                        	if($item['id'] == $photo['tour_id'] ){
                                            	echo $item['name'];
                                            }
                                        }									                                     
                                      
                                      ?></td>
                                    <td>{!! Form::open(['method' => 'DELETE',
                                    'route' =>['photo.destroy', $photo['id']]])!!}
                                        <button onclick="return confirm('Удалить Фотографию?')" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i></button>
                                        {!! Form::close() !!}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Фото</th>
                            <th>Тур</th>
                            <th>Действия</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
@endsection