@extends('layouts.app')

@section('content')
    <h1>Создание магазина</h1>
    <form action="{{url('markets')}}" method="post">
        {{ csrf_field() }}
        <label for="name">Название</label>
        <input type="text" name="name" id="name">
        <button class="btn btn-primary">Создать</button>
    </form>
@endsection
