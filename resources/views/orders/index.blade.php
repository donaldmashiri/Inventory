@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            <i class="bi bi-box me-2"></i>
                            {{ __('Purchase Orders') }}
                        </h5>
                        <div class="justify-content-end">
                            <a href="{{route('orders.create')}}" class="btn btn-success btn-sm justify-content-end"> Add Orders</a>
                        </div>
                    </div>
                    <div class="card-body">
                       @if($orders->count() > 0)
                            <table class="table table-sm table-bordered table-striped table-responsive-sm">
                                <thead>
                                <tr>
                                    <th scope="col">Purchase order #</th>
                                    <th scope="col">Supplier</th>
                                    <th scope="col">Order_date</th>
                                    <th scope="col">Delivery_date</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Total Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $data)
                                    <tr>
                                        <td> PU00{{$data->id}} </td>
                                        <td> {{$data->supplier->supplier_name}} </td>
                                        <td> {{$data->created_at}} </td>
                                        <td> {{$data->delivery_date}} </td>
                                        <td> {{$data->item_name}} </td>
                                        <td> ${{number_format($data->unit_price, 2)}} </td>
                                        <td> ${{number_format($data->total_price, 2)}} </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                           @else
                           <p class="alert alert-danger">No Data Added</p>
                        @endif

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
