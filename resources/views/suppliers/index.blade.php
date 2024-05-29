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
                            {{ __('Suppliers') }}
                        </h5>
                        <div class="justify-content-end">
                            <a href="{{route('suppliers.create')}}" class="btn btn-success btn-sm justify-content-end"> Add Supplier</a>
                        </div>
                    </div>
                    <div class="card-body">
                       @if($suppliers->count() > 0)
                            <table class="table table-sm table-bordered table-striped table-responsive-sm">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Account #</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($suppliers as $supplier)
                                    <tr>
                                        <td> {{$supplier->id}} </td>
                                        <td> {{$supplier->supplier_name}} </td>
                                        <td> {{$supplier->account_number}} </td>
                                        <td> {{$supplier->preferred_payment_method}} </td>
                                        <td> {{$supplier->created_at}} </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                           @else
                           <p class="alert alert-danger">No Items Added</p>
                        @endif

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
