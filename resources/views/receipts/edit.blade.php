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
            <label for="market_id" class="form-label">{{ __('receipt.propertyName_market') }}</label>
            <select name="market_id" id="market_id" class="form-control form-select">
                @foreach($markets as $market)
                    <option value="{{ $market->id }}"
                            @if($receipt->market->id === $market->id) selected @endif>
                        {{ $market->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="basket_id" class="form-label">{{ __('receipt.propertyName_basket') }}</label>
            <select name="basket_id" id="basket_id" class="form-control form-select">
                <option value="" @if(empty($receipt->basket) ) selected @endif>Нет</option>
                @foreach($baskets as $basket)
                    <option value="{{ $basket->id }}"
                            @if(!empty($receipt->basket) && $receipt->basket->id === $basket->id) selected @endif>
                        {{ $basket->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">{{ __('common.submitEditFormButtonText') }}</button>
    </form>
@endsection
