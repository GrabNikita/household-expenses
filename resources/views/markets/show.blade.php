@extends('layouts.app')

@section('pageHeader')
    {{ __('market.showPageHeader', ['name' => $market->name]) }}
@endsection

@section('content')
    <a href="{{route('markets.edit', ['market' => $market->id])}}"
       class="btn btn-primary">{{ __('common.editLinkText') }}</a>
    <br>
    <br>
    <form action="{{route('markets.destroy', ['market' => $market->id])}}" method="post">
        <button class="btn btn-primary">{{ __('common.deleteLinkText') }}</button>
        {{method_field('delete')}}
        {{csrf_field()}}
    </form>
    <br>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>{{ __('common.entityTableHeaders_name') }}</th>
                <th>{{ __('common.entityTableHeaders_value') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ __('market.propertyName_id') }}</td>
                <td>{{$market->id}}</td>
            </tr>
            <tr>
                <td>{{ __('market.propertyName_name') }}</td>
                <td>{{$market->name}}</td>
            </tr>
            <tr>
                <td>{{ __('market.propertyName_created_at') }}</td>
                <td>{{date('H:i:s d.m.Y', strtotime($market->created_at))}}</td>
            </tr>
            <tr>
                <td>{{ __('market.propertyName_updated_at') }}</td>
                <td>{{date('H:i:s d.m.Y', strtotime($market->updated_at))}}</td>
            </tr>
        </tbody>
    </table>
@endsection
