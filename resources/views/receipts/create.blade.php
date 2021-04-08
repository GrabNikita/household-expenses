@extends('layouts.app')

@section('pageHeader')
    {{ __('receipt.createPageHeader') }}
@endsection

@section('content')
    <form action="{{ route('receipts.store') }}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="purchase_date" class="form-label">{{ __('product.propertyName_purchase_date') }}</label>
            <input type="datetime-local" name="purchase_date" id="purchase_date" class="form-control">
        </div>
        <div class="mb-3">
            <label for="market_id" class="form-label">{{ __('receipt.propertyName_market') }}</label>
            <select name="market_id" id="market_id" class="form-control form-select">
                @foreach($markets as $market)
                    <option value="{{ $market->id }}">{{ $market->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="basket_id" class="form-label">{{ __('receipt.propertyName_basket') }}</label>
            <select name="basket_id" id="basket_id" class="form-control form-select">
                @foreach($baskets as $basket)
                    <option value="{{ $basket->id }}">{{ $basket->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">{{ __('common.submitCreateFormButtonText') }}</button>
    </form>
@endsection
