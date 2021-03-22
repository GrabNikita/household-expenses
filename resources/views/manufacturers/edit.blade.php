@extends('layouts.app')
@section('pageTitle')
    Edit manufacturer "{{ $manufacturer->name }}"
@endsection
@section('content')
    <form action="{{route('manufacturers.update', ['manufacturer' => $manufacturer->id])}}" method="post">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('manufacturers.propertyName_name') }}</label>
            <input type="text" name="name" id="name" value="{{ $manufacturer->name }}" class="form-control">
        </div>
        <button class="btn btn-primary">{{ __('manufacturers.submitEditFormButtonText') }}</button>
    </form>
@endsection
