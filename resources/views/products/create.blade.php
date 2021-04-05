@extends('layouts.app')

@section('pageHeader')
    {{ __('product.createPageHeader') }}
@endsection

@section('content')
    <form action="{{ url('products') }}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('product.propertyName_name') }}</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">{{ __('product.propertyName_amount') }}</label>
            <input type="number"  step="0.001" name="amount" id="amount" value="{{ $product->amount }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="unit" class="form-label">{{ __('product.propertyName_unit') }}</label>
            <select name="unit" id="unit" class="form-control form-select">
                @foreach(\App\Casts\Unit::getExistValues() as $value)
                    <option value="{{ $value}}">{{ __('product.unitValue_' . $value) }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="manufacturer" class="form-label">{{ __('product.propertyName_manufacturer') }}</label>
            <select name="manufacturer_id" id="manufacturer" class="form-control form-select">
                @foreach($manufacturers as $manufacturer)
                    <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="basket_item" class="form-label">{{ __('product.propertyName_basketItem') }}</label>
            <select name="basket_item_id" id="basket_item" class="form-control form-select">
                @foreach($basketItems as $basketItem)
                    <option value="{{ $basketItem->id }}">{{ $basketItem->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="basket_item" class="form-label">{{ __('product.propertyName_markets') }}</label>
            <select name="markets[]" id="basket_item" class="form-control form-select" multiple>
                @foreach($markets as $market)
                    <option value="{{ $market->id }}">{{ $market->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">{{ __('common.submitCreateFormButtonText') }}</button>
    </form>
@endsection
