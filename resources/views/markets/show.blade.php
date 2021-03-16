@extends('layouts.app')

@section('content')
    <h1>{{$market->name}}</h1>
    <hr>
    <a href="{{route('markets.index')}}">К списку</a>
    <hr>
    <a href="{{ route('markets.edit', ['market' => $market->id]) }}">Редактировать</a>
    <form action="{{ route('markets.destroy', ['market' => $market->id]) }}" method="post">
        <button>Удалить</button>
        {{ method_field('delete') }}
        {{ csrf_field() }}
    </form>
    <hr>
    <table>
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
