@extends('layouts.app')

@section('content')
    <h1>Магазины</h1>
    <a href="{{ route('markets.create') }}" class="btn btn-primary">Создать магазин</a>
    <br>
    <br>
    <table>
        @foreach ($markets as $market)
            <tr>
                <td>{{ $market->id }}</td>
                <td><a href="{{ route('markets.show', ['market' => $market->id]) }}">{{ $market->name }}</a></td>
            </tr>
        @endforeach
    </table>
@endsection
