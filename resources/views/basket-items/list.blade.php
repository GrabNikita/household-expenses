@extends('layouts.app')

@section('content')
    <h1>Содержимое корзин</h1>
    <a href="{{route('basket-items.create')}}" class="btn btn-primary">Создать продукт</a>
    <br>
    <br>
    <table class="table table-striped table-hover">
        @foreach ($basketItems as $basketItem)
            <tr>
                <td>{{$basketItem->id}}</td>
                <td><a href="{{route('basket-items.show', ['basket_item' => $basketItem->id])}}">{{$basketItem->name}}</a></td>
            </tr>
        @endforeach
    </table>
@endsection
