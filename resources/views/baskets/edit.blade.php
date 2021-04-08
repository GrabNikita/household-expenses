@extends('layouts.app')

@section('pageHeader')
    {{ __('basket.editPageHeader', ['name' => $basket->name]) }}
@endsection

@section('content')
    <form action="{{route('baskets.update', ['basket' => $basket->id])}}" method="post">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('basket.propertyName_name') }}</label>
            <input type="text" name="name" id="name" value="{{$basket->name}}" class="form-control">
        </div>
        <button class="btn btn-primary">{{ __('common.submitEditFormButtonText') }}</button>
    </form>
@endsection
