@extends('layouts.app')

@section('pageHeader')
    {{ __('market.editPageHeader', ['name' => $market->name]) }}
@endsection

@section('content')
    <form action="{{route('markets.update', ['market' => $market->id])}}" method="post">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('market.propertyName_name') }}</label>
            <input type="text" name="name" id="name" value="{{$market->name}}" class="form-control">
        </div>
        <button class="btn btn-primary">{{ __('common.submitEditFormButtonText') }}</button>
    </form>
@endsection
