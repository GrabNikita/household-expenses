@extends('layouts.app')

@section('content')
    <h1>Продукт - {{$product->name}}</h1>
    <a href="{{route('products.edit', ['product' => $product->id])}}" class="btn btn-primary">Редактировать</a>
    <br>
    <br>
    <form action="{{route('products.destroy', ['product' => $product->id])}}" method="post">
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
            <td>{{$product->id}}</td>
        </tr>
        <tr>
            <td>Название</td>
            <td>{{$product->name}}</td>
        </tr>
        <tr>
            <td>Производитель</td>
            <td>{{$product->manufacturer->name}}</td>
        </tr>
        <tr>
            <td>Содержимое корзины</td>
            <td>{{$product->basketItem->name}}</td>
        </tr>
        <tr>
            <td>Дата создания</td>
            <td>{{date('H:i:s d.m.Y', strtotime($product->created_at))}}</td>
        </tr>
        <tr>
            <td>Дата изменения</td>
            <td>{{date('H:i:s d.m.Y', strtotime($product->updated_at))}}</td>
        </tr>
        </tbody>
    </table>
@endsection
