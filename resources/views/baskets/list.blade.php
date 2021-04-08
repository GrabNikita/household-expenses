@extends('layouts.app')

@section('pageHeader')
    {{ __('basket.listPageHeader') }}
@endsection

@section('content')
    <a href="{{route('baskets.create')}}" class="btn btn-primary">{{ __('basket.createLinkText') }}</a>
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
            @foreach ($baskets as $basket)
                <tr>
                    <td>{{$basket->id}}</td>
                    <td><a href="{{route('baskets.show', ['basket' => $basket->id])}}">{{$basket->name}}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
