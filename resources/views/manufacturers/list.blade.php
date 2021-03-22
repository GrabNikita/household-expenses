@extends('layouts.app')
@section('pageTitle')
    Manufacturers
@endsection
@section('content')
    <a href="{{route('manufacturers.create')}}" class="btn btn-primary">{{ __('manufacturers.createLinkText') }}</a>
    <br>
    <br>
    <table class="table table-striped table-hover">
        @foreach ($manufacturers as $manufacturer)
            <tr>
                <td>{{$manufacturer->id}}</td>
                <td><a href="{{route('manufacturers.show', ['manufacturer' => $manufacturer->id])}}">
                        {{$manufacturer->name}}</a></td>
            </tr>
        @endforeach
    </table>
@endsection
