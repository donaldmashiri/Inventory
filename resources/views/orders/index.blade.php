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
                       @if($suppliers->count() > 0)
                            <table class="table table-sm table-bordered table-striped table-responsive-sm">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">purchase_order_number</th>
                                    <th scope="col">supplier</th>
                                    <th scope="col">order_date</th>
                                    <th scope="col">delivery_date</th>
                                    <th scope="col">item_name</th>
                                    <th scope="col">unit_price</th>
                                    <th scope="col">total_price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $data)
                                    <tr>
                                        <td> {{$data->id}} </td>
                                        <td> {{$data->purchase_order_number}} </td>
                                        <td> {{$data->created_at}} </td>
                                        <td> {{$data->delivery_date}} </td>
                                        <td> {{$data->item_name}} </td>
                                        <td> {{$data->unit_price}} </td>
                                        <td> {{$data->total_price}} </td>
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
