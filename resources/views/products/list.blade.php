@extends('layouts.app')

@section('pageHeader')
    {{ __('product.listPageHeader') }}
@endsection

@section('content')
    <a href="{{route('products.create')}}" class="btn btn-primary">{{ __('product.createLinkText') }}</a>
    <br>
    <br>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>{{ __('product.propertyName_id') }}</th>
            <th>{{ __('product.propertyName_name') }}</th>
            <th>{{ __('product.propertyName_manufacturer') }}</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td><a href="{{route('products.show', ['product' => $product->id])}}">{{$product->name}}</a></td>
                    <td>{{$product->manufacturer->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
