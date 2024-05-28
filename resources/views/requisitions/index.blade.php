@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Requisitions') }}
                        </h5>
                        <div class="justify-content-end">
                            <a href="{{route('requisitions.create')}}" class="btn btn-success btn-sm justify-content-end"> Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                       @if($requisitions->count() > 0)
                            <table class="table table-sm table-bordered table-striped table-responsive-sm">
                                <thead>
                                <tr>
                                    <th scope="col">Req#</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Quantity Requested</th>
                                    <th scope="col">Approval Status</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($requisitions as $data)
                                    <tr>
                                        <td> {{$data->id}} </td>
                                        <td> {{$data->inventory->item_name}} </td>
                                        <td> {{$data->inventory->item_category}} </td>
                                        <td> {{$data->inventory->item_code}} </td>
                                        <td> {{$data->quantity}} </td>
                                        <td> {{$data->status}} </td>
{{--                                       --}}
{{--                                        <td> {{$inventory->item_category}} </td>--}}
{{--                                        <td> {{$inventory->item_code}} </td>--}}
{{--                                        <td> {{$inventory->item_quantity}} </td>--}}
{{--                                        <td> Available </td>--}}
{{--                                        <td><a href="{{route('inventories.show', $inventory->id)}}" class="btn btn-warning btn-sm">View</a> </td>--}}
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
