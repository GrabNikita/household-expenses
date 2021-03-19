@extends('layouts.app')

@section('content')
    <h1>Создание производителя</h1>
    <form action="{{url('manufacturers')}}" method="post">
        {{csrf_field()}}
        <label for="name">Название</label>
        <input type="text" name="name" id="name">
        <button class="btn btn-primary">Создать</button>
    </form>
@endsection
