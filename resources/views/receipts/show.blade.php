@extends('layouts.app')

@section('pageHeader')
    {{ __('receipt.showPageHeader', ['purchase_date' => date('H:i d.m.Y', strtotime($receipt->purchase_date))]) }}
@endsection

@section('content')
    <a href="{{ route('receipts.edit', ['receipt' => $receipt->id]) }}"
       class="btn btn-primary">{{ __('common.editLinkText') }}</a>
    <br>
    <br>
    <form action="{{ route('receipts.destroy', ['receipt' => $receipt->id]) }}" method="post">
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
            <td>{{ __('receipt.propertyName_id') }}</td>
            <td>{{ $receipt->id }}</td>
        </tr>
        <tr>
            <td>{{ __('receipt.propertyName_market') }}</td>
            <td>{{ $receipt->market->name }}</td>
        </tr>
        <tr>
            <td>{{ __('receipt.propertyName_basket') }}</td>
            <td>{{ $receipt->basket->name }}</td>
        </tr>
        <tr>
            <td>{{ __('receipt.propertyName_purchase_date') }}</td>
            <td>{{ date('H:i:s d.m.Y', strtotime($receipt->purchase_date)) }}</td>
        </tr>
        </tbody>
    </table>
@endsection
