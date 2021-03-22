@extends('layouts.app')
@section('pageTitle')
    Manufacturer "{{ $manufacturer->name }}"
@endsection
@section('content')
    <a href="{{route('manufacturers.edit', ['manufacturer' => $manufacturer->id])}}"
       class="btn btn-primary">{{ __('common.editLinkText') }}</a>
    <br>
    <br>
    <form action="{{route('manufacturers.destroy', ['manufacturer' => $manufacturer->id])}}" method="post">
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
            <td>{{ __('manufacturers.propertyName_id') }}</td>
            <td>{{$manufacturer->id}}</td>
        </tr>
        <tr>
            <td>{{ __('manufacturers.propertyName_name') }}</td>
            <td>{{$manufacturer->name}}</td>
        </tr>
        <tr>
            <td>{{ __('manufacturers.propertyName_created_at') }}</td>
            <td>{{date('H:i:s d.m.Y', strtotime($manufacturer->created_at))}}</td>
        </tr>
        <tr>
            <td>{{ __('manufacturers.propertyName_updated_at') }}</td>
            <td>{{date('H:i:s d.m.Y', strtotime($manufacturer->updated_at))}}</td>
        </tr>
        </tbody>
    </table>
@endsection
