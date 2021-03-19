@extends('layouts.app')

@section('content')
    <h1>Создание магазина</h1>
    <form action="{{route('markets.update', ['market' => $market->id])}}" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <label for="name">Название</label>
        <input type="text" name="name" id="name" value="{{ $market->name }}">
        <button>Сохранить</button>
    </form>
@endsection
