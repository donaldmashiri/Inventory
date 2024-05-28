@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Invoices') }}
                        </h5>
                    </div>
                    <div class="card-body">
                        @include('layouts.messages')
                       @if($requisitions->count() > 0)
                            <table class="table table-sm table-bordered table-striped table-responsive-sm">
                                <thead>
                                <tr>
                                    <th scope="col">Req#</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Quantity Requested</th>
                                    <th scope="col">Date Requested</th>
                                    <th scope="col">Date Approved</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($requisitions as $requisition)
                                    <tr>
                                        <td> {{$requisition->id}} </td>
                                        <td> {{$requisition->inventory->item_name}} </td>
                                        <td> {{$requisition->inventory->item_category}} </td>
                                        <td> {{$requisition->inventory->item_code}} </td>
                                        <td> {{$requisition->quantity}} </td>
                                        <td> {{$requisition->created_at}} </td>
                                        <td> {{$requisition->updated_at}} </td>
                                        <td>
                                            <a href="" class="btn btn-info btn-sm">View Invoice</a>
                                        </td>

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
