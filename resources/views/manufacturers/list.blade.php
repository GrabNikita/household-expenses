@extends('layouts.app')

@section('content')
    <h1>Производители</h1>
    <a href="{{route('manufacturers.create')}}" class="btn btn-primary">Создать производителя</a>
    <br>
    <br>
    <table>
        @foreach ($manufacturers as $manufacturer)
            <tr>
                <td>{{$manufacturer->id}}</td>
                <td><a href="{{route('manufacturers.show', ['manufacturer' => $manufacturer->id])}}">
                        {{$manufacturer->name}}</a></td>
            </tr>
        @endforeach
    </table>
@endsection
