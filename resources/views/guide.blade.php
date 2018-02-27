@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Заявки:</h3>
                <div class="box-tools">
                    <a href="{{ route('guide.create') }}" class="btn btn-success">Добавить</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Аватар</th>
                            <th>Имя</th>
                            <th>Описание</th>
                            <th>Соцсети</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($guides)
                            @foreach($guides as $guide)
                                <tr>
                                    <td><img src="../img/content/guide/{{ $guide['avatar']}}" alt="img" style="max-width: 600px;"></td>
                                    <td>{{ $guide['name']}}</td>
                                    <td>{{ $guide['description']}}</td>
                                    <td>{{ $guide['link_vk']}}<br>{{ $guide['link_fb']}}<br>{{ $guide['link_inst']}}</td>

                                    <td>{!! Form::open(['method' => 'DELETE',
                                        'route' =>['guide.destroy', $guide['id']]])!!}
                                        <button onclick="return confirm('Удалить гида?')"><i class="glyphicon glyphicon-remove"></i></button>
                                        {!! Form::close() !!}
                                    <a href="{{ url('home/guide/edit?id='.$guide['id']) }}"><button><i class="glyphicon glyphicon-edit"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Аватар</th>
                            <th>Имя</th>
                            <th>Описание</th>
                            <th>Соцсети</th>
                            <th>Действия</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
@endsection