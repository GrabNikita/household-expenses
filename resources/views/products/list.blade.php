@extends('layouts.app')

@section('content')
    <h1>Продукты</h1>
    <a href="{{route('products.create')}}" class="btn btn-primary">Создать продукт</a>
    <br>
    <br>
    <table class="table table-striped table-hover">
        @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td><a href="{{route('products.show', ['product' => $product->id])}}">{{$product->name}}</a></td>
                <td>{{$product->manufacturer->name}}</td>
                <td>{{$product->basketItem->name}}</td>
            </tr>
        @endforeach
    </table>
@endsection
