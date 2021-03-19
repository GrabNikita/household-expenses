@extends('layouts.app')

@section('content')
    <h1>Редактирование магазина</h1>
    <form action="{{route('markets.update', ['market' => $market->id])}}" method="post">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input type="text" name="name" id="name" value="{{$market->name}}" class="form-control">
        </div>
        <button class="btn btn-primary">Сохранить</button>
    </form>
@endsection
