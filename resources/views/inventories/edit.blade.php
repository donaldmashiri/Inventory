@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Update Inventories') }}
                        </h5>
                        <div class="justify-content-end">
                            <a href="{{route('inventories.index')}}" class="btn btn-secondary btn-sm justify-content-end"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-sm table-bordered table-striped table-responsive-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Category</th>
                                <th scope="col">Code</th>
                                <th scope="col">Quantity</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> {{$inventory->id}} </td>
                                    <td> {{$inventory->item_name}} </td>
                                    <td> {{$inventory->item_description}} </td>
                                    <td> {{$inventory->item_category}} </td>
                                    <td> {{$inventory->item_code}} </td>
                                    <td> {{$inventory->item_quantity}} </td>
                                </tr>

                            </tbody>
                        </table>

                        @include('layouts.messages')
                        <form method="POST" action="{{ route('inventories.update', $inventory->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-md-6 form-group mt-3">
                                    <label for="item_quantity">{{ __('Quantity') }}</label>
                                    <input id="item_quantity" type="text" value="{{$inventory->item_quantity}}" class="form-control @error('item_quantity') is-invalid @enderror" name="item_quantity"  required >

                                    @error('item_quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>

                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
