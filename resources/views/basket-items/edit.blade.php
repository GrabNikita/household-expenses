@extends('layouts.app')

@section('pageHeader')
    {{ __('basketItem.editPageHeader', ['name' => $basketItem->name]) }}
@endsection


@section('content')
    <form action="{{route('basket-items.update', ['basket_item' => $basketItem->id])}}" method="post">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('basketItem.propertyName_name') }}</label>
            <input type="text" name="name" id="name" value="{{$basketItem->name}}" class="form-control">
        </div>
        <button class="btn btn-primary">{{ __('common.submitEditFormButtonText') }}</button>
    </form>
@endsection
