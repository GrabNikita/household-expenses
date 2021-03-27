@extends('layouts.app')

@section('pageHeader')
    {{ __('market.listPageHeader') }}
@endsection

@section('content')
    <a href="{{route('markets.create')}}" class="btn btn-primary">{{ __('market.createLinkText') }}</a>
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
            @foreach ($markets as $market)
                <tr>
                    <td>{{$market->id}}</td>
                    <td><a href="{{route('markets.show', ['market' => $market->id])}}">{{$market->name}}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
