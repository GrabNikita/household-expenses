@extends('layouts.app')

@section('content')
    <h1>Создание магазина</h1>
    <form action="{{url('markets')}}" method="post">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <button class="btn btn-primary">Создать</button>
    </form>
@endsection
