@extends('layouts.app')

@section('pageHeader')
    {{ __('receipt.listPageHeader') }}
@endsection

@section('content')
    <script>
        window.serverSideData = Object.assign(window.serverSideData, @json([
            'receipts' => $receipts,
        ]));
    </script>
@endsection
@section('content2')
    <a href="{{ route('receipts.create') }}" class="btn btn-primary">{{ __('receipt.createLinkText') }}</a>
    <br>
    <br>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>{{ __('receipt.propertyName_id') }}</th>
            <th>{{ __('receipt.propertyName_purchase_date') }}</th>
            <th>{{ __('receipt.propertyName_market') }}</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($receipts as $receipt)
                <tr>
                    <td>{{ $receipt->id }}</td>
                    <td>
                        <a href="{{ route('receipts.show', ['receipt' => $receipt->id]) }}">
                            {{ $receipt->purchase_date }}</a>
                    </td>
                    <td>{{ $receipt->market->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $receipts->links() }}
@endsection
