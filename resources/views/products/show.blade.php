@extends('layouts.app')

@section('pageHeader')
    {{ __('product.showPageHeader', ['name' => $product->name]) }}
@endsection

@section('content')
    <a href="{{ route('products.edit', ['product' => $product->id]) }}"
       class="btn btn-primary">{{ __('common.editLinkText') }}</a>
    <br>
    <br>
    <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post">
        <button class="btn btn-primary">{{ __('common.deleteLinkText') }}</button>
        {{ method_field('delete') }}
        {{ csrf_field() }}
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
            <td>{{ __('product.propertyName_id') }}</td>
            <td>{{ $product->id }}</td>
        </tr>
        <tr>
            <td>{{ __('product.propertyName_name') }}</td>
            <td>{{ $product->name }}</td>
        </tr>
        <tr>
            <td>{{ __('product.propertyName_manufacturer') }}</td>
            <td>{{ $product->manufacturer->name }}</td>
        </tr>
        <tr>
            <td>{{ __('product.propertyName_basketItem') }}</td>
            <td>{{ $product->basketItem->name }}</td>
        </tr>
        <tr>
            <td>{{ __('product.propertyName_markets') }}</td>
            <td>{{ $product->markets->map(function ($market) {return $market->name;})->implode(', ') }}</td>
        </tr>
        <tr>
            <td>{{ __('product.propertyName_created_at') }}</td>
            <td>{{ date('H:i:s d.m.Y', strtotime($product->created_at)) }}</td>
        </tr>
        <tr>
            <td>{{ __('product.propertyName_updated_at') }}</td>
            <td>{{ date('H:i:s d.m.Y', strtotime($product->updated_at)) }}</td>
        </tr>
        </tbody>
    </table>
@endsection
