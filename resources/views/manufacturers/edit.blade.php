@extends('layouts.app')

@section('content')
    <h1>Редактирование производителя</h1>
    <form action="{{route('manufacturers.update', ['manufacturer' => $manufacturer->id])}}" method="post">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <label for="name">Название</label>
        <input type="text" name="name" id="name" value="{{ $manufacturer->name }}">
        <button>Сохранить</button>
    </form>
@endsection
