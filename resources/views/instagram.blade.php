@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Заявки:</h3>
                <div class="box-tools">
                    <a href="{{ route('instagram.create') }}" class="btn btn-success">Добавить</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Фото</th>
                            <th>Сcылка</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($instagrams)
                            @foreach($instagrams as $instagram)
                                <tr>
                                    <td><img src="../img/content/instagram/{{ $instagram['path']}}" alt="img" style="max-width: 600px;"></td>
                                    <td>{{ $instagram['link']}}
                                    </td>
                                    <td>{!! Form::open(['method' => 'DELETE',
                                        'route' =>['instagram.destroy', $instagram['id']]])!!}
                                        <button onclick="return confirm('Удалить?')"><i class="glyphicon glyphicon-remove"></i></button>
                                        {!! Form::close() !!}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Фото</th>
                            <th>Сcылка</th>
                            <th>Действия</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
@endsection