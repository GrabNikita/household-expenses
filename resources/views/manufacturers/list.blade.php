@extends('layouts.app')

@section('pageHeader')
    {{ __('manufacturer.listPageHeader') }}
@endsection

@section('content')
    <a href="{{route('manufacturers.create')}}" class="btn btn-primary">{{ __('manufacturer.createLinkText') }}</a>
    <br>
    <br>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>{{ __('manufacturer.propertyName_id') }}</th>
                <th>{{ __('manufacturer.propertyName_name') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($manufacturers as $manufacturer)
                <tr>
                    <td>{{$manufacturer->id}}</td>
                    <td><a href="{{route('manufacturers.show', ['manufacturer' => $manufacturer->id])}}">
                            {{$manufacturer->name}}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
