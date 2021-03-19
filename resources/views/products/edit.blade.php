@extends('layouts.app')

@section('content')
    <h1>Редактирование продукта</h1>
    <form action="{{route('products.update', ['product' => $product->id])}}" method="post">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="manufacturer" class="form-label">Производитель</label>
            <select name="manufacturer_id" id="manufacturer" class="form-control form-select">
                @foreach($manufacturers as $manufacturer)
                    <option value="{{$manufacturer->id}}"
                            @if($manufacturer->id === $product->manufacturer->id) selected @endif>
                        {{$manufacturer->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="basket_item" class="form-label">Содержимое корзины</label>
            <select name="basket_item_id" id="basket_item" class="form-control form-select">
                @foreach($basketItems as $basketItem)
                    <option value="{{$basketItem->id}}"
                            @if($basketItem->id === $product->basketItem->id) selected @endif>
                        {{$basketItem->name}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">Сохранить</button>
    </form>
@endsection
