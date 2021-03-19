@extends('layouts.app')

@section('content')
    <h1>Производитель - {{$manufacturer->name}}</h1>
    <a href="{{route('manufacturers.edit', ['manufacturer' => $manufacturer->id])}}"
       class="btn btn-primary">Редактировать</a>
    <br>
    <br>
    <form action="{{route('manufacturers.destroy', ['manufacturer' => $manufacturer->id])}}" method="post">
        <button class="btn btn-primary">Удалить</button>
        {{method_field('delete')}}
        {{csrf_field()}}
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
            <td>{{$manufacturer->id}}</td>
        </tr>
        <tr>
            <td>Название</td>
            <td>{{$manufacturer->name}}</td>
        </tr>
        <tr>
            <td>Дата создания</td>
            <td>{{date('H:i:s d.m.Y', strtotime($manufacturer->created_at))}}</td>
        </tr>
        <tr>
            <td>Дата изменения</td>
            <td>{{date('H:i:s d.m.Y', strtotime($manufacturer->updated_at))}}</td>
        </tr>
        </tbody>
    </table>
@endsection
