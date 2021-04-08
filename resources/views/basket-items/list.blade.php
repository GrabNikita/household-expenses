@extends('layouts.app')

@section('pageHeader')
    {{ __('basketItem.listPageHeader') }}
@endsection

@section('content')
    <a href="{{ route('basket-items.create') }}" class="btn btn-primary">{{ __('basketItem.createLinkText') }}</a>
    <br>
    <br>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>{{ __('basketItem.propertyName_id') }}</th>
            <th>{{ __('basketItem.propertyName_name') }}</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($basketItems as $basketItem)
                <tr>
                    <td>{{ $basketItem->id }}</td>
                    <td>
                        <a href="{{ route('basket-items.show', ['basket_item' => $basketItem->id]) }}">
                            {{ $basketItem->name }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
