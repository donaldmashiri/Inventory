@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Suppliers') }}
                        </h5>
                        <div class="justify-content-end">
                            <a href="{{route('suppliers.index')}}" class="btn btn-secondary btn-sm justify-content-end"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('layouts.messages')
                        <form method="POST" action="{{ route('orders.store') }}">
                            @csrf

                           <div class="row">
                               <div class="col-md-12 m-2 form-group">
                                       <label for="supplier_id">{{ __('Select Supplier') }}</label>
                                   <select name="supplier_id" id="supplier_id" class="form-control">
                                       <option value="">Select Supplier</option>
                                       @foreach($suppliers as $supplier)
                                           <option value="{{$supplier->id}}">{{$supplier->supplier_name}}</option>
                                       @endforeach
                                   </select>

                                       @error('supplier_id')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                               </div>

                               <div class="col-md-8 m-2 form-group">
                                   <label for="item_name">{{ __('Item Name') }}</label>
                                   <select name="item_name" id="item_name" class="form-control">
                                       <option value="">Select Item Name</option>
                                       @foreach($items as $data)
                                           <option value="{{$data->item_name}}">{{$data->item_name}}</option>
                                       @endforeach
                                   </select>
                                   @error('item_name')
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                               </div>

                               <div class="col-md-8 m-2 form-group">
                                       <label for="unit_price">{{ __('Unit Price') }}</label>
                                       <input id="unit_price" type="text" class="form-control" name="unit_price"  required >
                                       @error('unit_price')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                               </div>

                               <div class="col-md-8 m-2 form-group">
                                       <label for="quantity">{{ __('quantity') }}</label>
                                       <input id="quantity" type="text" class="form-control" name="quantity"  required >
                                       @error('quantity')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                               </div>

                               <div class="col-md-8  m-2 form-group">
                                   <label for="delivery_date">{{ __('Delivery Date') }}</label>
                                   <input id="delivery_date" type="date" class="form-control" name="delivery_date"  required >
                                   @error('delivery_date')
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                               </div>

                           </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Create') }}
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
