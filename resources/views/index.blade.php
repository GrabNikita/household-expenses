@extends('layouts.app')

@section('pageHeader')
    {{ __('index.pageHeader') }}
@endsection

@section('content')
    <script>
        window.serverSideData = Object.assign(window.serverSideData, @json([
            'receipts' => $receipts,
        ]));
    </script>
@endsection
