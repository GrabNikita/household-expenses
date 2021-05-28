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
            <td>{{ __('receipt.propertyName_purchase_date') }}</td>
            <td>{{ date('H:i:s d.m.Y', strtotime($receipt->purchase_date)) }}</td>
        </tr>
        <tr>
            <td>{{ __('receipt.propertyName_price') }}</td>
            <td>{{ $receipt->price }}</td>
        </tr>
        <tr>
            <td>{{ __('receipt.propertyName_market') }}</td>
            <td>{{ $receipt->market->name }}</td>
        </tr>
        </tbody>
    </table>
    <h2>{{ __('receipt.propertyName_receiptItems') }}</h2>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>{{ __('receiptItem.propertyName_id') }}</th>
            <th>{{ __('receiptItem.propertyName_product') }}</th>
            <th>{{ __('product.propertyName_amount') }}</th>
            <th>{{ __('product.propertyName_unit') }}</th>
            <th>{{ __('receiptItem.propertyName_amount') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($receipt->receiptItems as $receiptItem)
            <tr>
                <td>{{ $receiptItem->id }}</td>
                <td>{{ $receiptItem->product->name }}</td>
                <td>{{ $receiptItem->product->amount }}</td>
                <td>{{ __('product.unitValue_' . $receiptItem->product->unit) }}</td>
                <td>{{ $receiptItem->amount }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <form action="{{ url('receipt-items') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="receipt" value="{{ $receipt->id }}">
        <div class="mb-3">
            <label for="product_id" class="form-label">{{ __('receiptItem.propertyName_product') }}</label>
            <select name="product_id" id="product_id" class="form-control form-select">
                @foreach($products as $product)
                    <option value="{{ $product->id }}">
                        {{ $product->name }} {{ $product->amount }}
                        {{ __('product.unitValue_' . $product->unit) }} ({{ $product->manufacturer->name }})
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">{{ __('receiptItem.propertyName_amount') }}</label>
            <input type="number"  step="0.001" name="amount" id="amount" class="form-control">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">{{ __('receiptItem.propertyName_price') }}</label>
            <input type="number"  step="0.01" name="price" id="price" class="form-control">
            <div id="priceHelp" class="form-text">{{ __('receiptItem.price_help') }}</div>
        </div>
        <button class="btn btn-primary">{{ __('common.submitCreateFormButtonText') }}</button>
    </form>
@endsection
