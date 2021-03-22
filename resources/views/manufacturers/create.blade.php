@extends('layouts.app')
@section('pageTitle')
    Create manufacturer
@endsection
@section('content')
    <form action="{{url('manufacturers')}}" method="post">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('manufacturers.propertyName_name') }}</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <button class="btn btn-primary">{{ __('manufacturers.submitCreateFormButtonText') }}</button>
    </form>
@endsection
