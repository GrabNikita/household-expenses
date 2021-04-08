@extends('layouts.app')

@section('pageHeader')
    {{ __('basket.showPageHeader', ['name' => $basket->name]) }}
@endsection

@section('content')
    <a href="{{route('baskets.edit', ['basket' => $basket->id])}}"
       class="btn btn-primary">{{ __('common.editLinkText') }}</a>
    <br>
    <br>
    <form action="{{route('baskets.destroy', ['basket' => $basket->id])}}" method="post">
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
                <td>{{ __('basket.propertyName_id') }}</td>
                <td>{{$basket->id}}</td>
            </tr>
            <tr>
                <td>{{ __('basket.propertyName_name') }}</td>
                <td>{{$basket->name}}</td>
            </tr>
            <tr>
                <td>{{ __('basket.propertyName_creator') }}</td>
                <td>{{$basket->creator->name}}</td>
            </tr>
            <tr>
                <td>{{ __('basket.propertyName_created_at') }}</td>
                <td>{{date('H:i:s d.m.Y', strtotime($basket->created_at))}}</td>
            </tr>
            <tr>
                <td>{{ __('basket.propertyName_updated_at') }}</td>
                <td>{{date('H:i:s d.m.Y', strtotime($basket->updated_at))}}</td>
            </tr>
        </tbody>
    </table>
@endsection
