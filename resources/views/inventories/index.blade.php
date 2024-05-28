@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Inventories') }}
                        </h5>
                        <div class="justify-content-end">
                            <a href="{{route('inventories.create')}}" class="btn btn-success btn-sm justify-content-end"> Add Item</a>
                        </div>
                    </div>
                    <div class="card-body">
                       @if($inventories->count() > 0)
                            <table class="table table-sm table-bordered table-striped table-responsive-sm">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($inventories as $inventory)
                                    <tr>
                                        <td> {{$inventory->id}} </td>
                                        <td> {{$inventory->item_name}} </td>
                                        <td> {{$inventory->item_description}} </td>
                                        <td> {{$inventory->item_category}} </td>
                                        <td> {{$inventory->item_code}} </td>
                                        <td> {{$inventory->item_quantity}} </td>
                                        <td> Available </td>
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
