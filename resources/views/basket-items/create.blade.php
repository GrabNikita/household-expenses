@extends('layouts.app')

@section('pageHeader')
    {{ __('basketItem.createPageHeader') }}
@endsection

@section('content')
    <form action="{{url('basket-items')}}" method="post">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('basketItem.propertyName_name') }}</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <button class="btn btn-primary">{{ __('common.submitCreateFormButtonText') }}</button>
    </form>
@endsection
