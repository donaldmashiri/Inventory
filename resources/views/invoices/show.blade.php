@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
{{--            @include('layouts.sidebar')--}}
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            <i class="bi bi-box me-2"></i>
                            {{ __('Purchase Order Details') }}
                        </h5>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('orders.index') }}" class="btn btn-secondary btn-sm me-2">
                                <i class="bi bi-arrow-left"></i> Back
                            </a>
                            <button onclick="window.print()" class="btn btn-primary btn-sm">
                                <i class="bi bi-printer"></i> Print
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Purchase Order #:</strong> PU00{{ $order->id }}</p>
                                <p><strong>Supplier:</strong> {{ $order->supplier->supplier_name }}</p>
                                <p><strong>Order Date:</strong> {{ $order->created_at->format('Y-m-d') }}</p>
                                <p><strong>Delivery Date:</strong> {{ $order->delivery_date }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Item Name:</strong> {{ $order->item_name }}</p>
                                <p><strong>Unit Price:</strong> ${{ number_format($order->unit_price, 2) }}</p>
                                <p><strong>Total Price:</strong> ${{ number_format($order->total_price, 2) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
