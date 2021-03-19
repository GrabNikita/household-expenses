@extends('layouts.app')

@section('content')
    <h1>Содержимое корзины - {{$basketItem->name}}</h1>
    <a href="{{route('basket-items.edit', ['basket_item' => $basketItem->id])}}" class="btn btn-primary">Редактировать</a>
    <br>
    <br>
    <form action="{{route('basket-items.destroy', ['basket_item' => $basketItem->id])}}" method="post">
        <button class="btn btn-primary">Удалить</button>
        {{method_field('delete')}}
        {{csrf_field()}}
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
            <td>{{$basketItem->id}}</td>
        </tr>
        <tr>
            <td>Название</td>
            <td>{{$basketItem->name}}</td>
        </tr>
        <tr>
            <td>Дата создания</td>
            <td>{{date('H:i:s d.m.Y', strtotime($basketItem->created_at))}}</td>
        </tr>
        <tr>
            <td>Дата изменения</td>
            <td>{{date('H:i:s d.m.Y', strtotime($basketItem->updated_at))}}</td>
        </tr>
        </tbody>
    </table>
@endsection
