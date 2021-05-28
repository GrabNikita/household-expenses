@extends('layouts.app')

@section('pageHeader')
    {{ __('receipt.editPageHeader', ['purchase_date' => date('H:i d.m.Y', strtotime($receipt->purchase_date))]) }}
@endsection

@section('content')
    <form action="{{ route('receipts.update', ['receipt' => $receipt->id]) }}" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="purchase_date" class="form-label">{{ __('receipt.propertyName_purchase_date') }}</label>
            <input type="datetime-local" name="purchase_date" id="purchase_date" class="form-control"
                   value="{{ $receipt->purchase_date->toDateTimeLocalString() }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">{{ __('receipt.propertyName_price') }}</label>
            <input type="number"  step="0.01" name="price" id="price" class="form-control"
                   value="{{ $receipt->price }}">
        </div>
        <div class="mb-3">
            <label for="market_id" class="form-label">{{ __('receipt.propertyName_market') }}</label>
            <select name="market_id" id="market_id" class="form-control form-select">
                @foreach($markets as $market)
                    <option value="{{ $market->id }}"
                            @if($receipt->market->id === $market->id) selected @endif>
                        {{ $market->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">{{ __('common.submitEditFormButtonText') }}</button>
    </form>
@endsection
