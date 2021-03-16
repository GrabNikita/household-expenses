@extends('layouts.app')

@section('content')
    <h1>Создание магазина</h1>
    <hr>
    <a href="{{route('markets.index')}}">К списку</a>
    <hr>
    <form action="{{url('markets')}}" method="post">
        {{ csrf_field() }}
        <label for="name">Название</label>
        <input type="text" name="name" id="name">
        <button>Создать</button>
    </form>
@endsection
