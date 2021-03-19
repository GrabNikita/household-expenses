@extends('layouts.app')

@section('content')
    <h1>Редактирование содержимого корзины - {{$basketItem->name}}</h1>
    <form action="{{route('basket-items.update', ['basket_item' => $basketItem->id])}}" method="post">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input type="text" name="name" id="name" value="{{$basketItem->name}}" class="form-control">
        </div>
        <button class="btn btn-primary">Сохранить</button>
    </form>
@endsection
