@extends('layouts.app')

@section('pageHeader')
    {{ __('product.createPageHeader') }}
@endsection

@section('content')
    <form action="{{ url('products') }}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('product.propertyName_name') }}</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="amount_type" class="form-label">{{ __('product.propertyName_amount_type') }}</label>
            <select name="amount_type" id="amount_type" class="form-control form-select" required>
                @foreach(\App\Casts\ProductAmountType::getExistValues() as $value)
                    @if($value === \App\Casts\ProductAmountType::UNDEFINED)
                        @continue
                    @endif
                    <option value="{{ $value}}" @if ($value === \App\Casts\ProductAmountType::BY_PIECE) selected @endif>
                        {{ __('product.amountTypeValue_' . $value) }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">{{ __('product.propertyName_amount') }}</label>
            <input type="number"  step="0.001" name="amount" id="amount" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="unit" class="form-label">{{ __('product.propertyName_unit') }}</label>
            <select name="unit" id="unit" class="form-control form-select" required>
                @foreach(\App\Casts\ProductUnit::getExistValues() as $value)
                    @if($value === \App\Casts\ProductUnit::UNDEFINED)
                        @continue
                    @endif
                    <option value="{{ $value}}">{{ __('product.unitValue_' . $value) }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="manufacturer" class="form-label">{{ __('product.propertyName_manufacturer') }}</label>
            <select name="manufacturer_id" id="manufacturer" class="form-control form-select" required>
                @foreach($manufacturers as $manufacturer)
                    <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="markets" class="form-label">{{ __('product.propertyName_markets') }}</label>
            <select name="markets[]" id="markets" class="form-control form-select" multiple required>
                @foreach($markets as $market)
                    <option value="{{ $market->id }}">{{ $market->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">{{ __('common.submitCreateFormButtonText') }}</button>
    </form>
@endsection
