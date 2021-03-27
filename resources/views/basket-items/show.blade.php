@extends('layouts.app')

@section('pageHeader')
    {{ __('basketItem.showPageHeader', ['name' => $basketItem->name]) }}
@endsection

@section('content')
    <a href="{{route('basket-items.edit', ['basket_item' => $basketItem->id])}}"
       class="btn btn-primary">{{ __('common.editLinkText') }}</a>
    <br>
    <br>
    <form action="{{route('basket-items.destroy', ['basket_item' => $basketItem->id])}}" method="post">
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
            <td>{{ __('basketItem.propertyName_id') }}</td>
            <td>{{$basketItem->id}}</td>
        </tr>
        <tr>
            <td>{{ __('basketItem.propertyName_name') }}</td>
            <td>{{$basketItem->name}}</td>
        </tr>
        <tr>
            <td>{{ __('basketItem.propertyName_created_at') }}</td>
            <td>{{date('H:i:s d.m.Y', strtotime($basketItem->created_at))}}</td>
        </tr>
        <tr>
            <td>{{ __('basketItem.propertyName_updated_at') }}</td>
            <td>{{date('H:i:s d.m.Y', strtotime($basketItem->updated_at))}}</td>
        </tr>
        </tbody>
    </table>
@endsection
