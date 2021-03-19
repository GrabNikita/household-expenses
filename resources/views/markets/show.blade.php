@extends('layouts.app')

@section('content')
    <h1>Магазин - {{$market->name}}</h1>
    <a href="{{ route('markets.edit', ['market' => $market->id]) }}" class="btn btn-primary">Редактировать</a>
    <br>
    <br>
    <form action="{{ route('markets.destroy', ['market' => $market->id]) }}" method="post">
        <button class="btn btn-primary">Удалить</button>
        {{ method_field('delete') }}
        {{ csrf_field() }}
    </form>
    <br>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Название</th>
            <th>Значение</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Идентификатор</td>
            <td>{{$market->id}}</td>
        </tr>
        <tr>
            <td>Название</td>
            <td>{{$market->name}}</td>
        </tr>
        <tr>
            <td>Дата создания</td>
            <td>{{date('H:i:s d.m.Y', strtotime($market->created_at))}}</td>
        </tr>
        <tr>
            <td>Дата изменения</td>
            <td>{{date('H:i:s d.m.Y', strtotime($market->updated_at))}}</td>
        </tr>
        </tbody>
    </table>
@endsection
