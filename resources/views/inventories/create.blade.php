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
                            <a href="{{route('inventories.index')}}" class="btn btn-secondary btn-sm justify-content-end"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('layouts.messages')
                        <form method="POST" action="{{ route('inventories.store') }}">
                            @csrf

                           <div class="row">
                               <div class="col-md-6 form-group">
                                       <label for="item_name">{{ __('Item Name') }}</label>
                                       <input id="item_name" type="text" class="form-control @error('item_name') is-invalid @enderror" name="item_name"  required >

                                       @error('item_name')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                               </div>
                               <div class="col-md-6 form-group">
                                       <label for="item_code">{{ __('Item Code') }}</label>
                                       <input id="item_code" type="text" class="form-control @error('item_code') is-invalid @enderror" name="item_code"  required >

                                       @error('item_code')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                               </div>

                               <div class="col-md-6 form-group mt-3">
                                   <label for="item_category">{{ __('Item Category') }}</label>
                                   <select name="item_category" class="form-control " id="item_category">
                                       <option value="">Select Category</option>
                                       <option value="Clothing">Clothing</option>
                                       <option value="Electronics">Electronics</option>
                                       <option value="Home Goods">Home Goods</option>
                                       <option value="Furniture">Furniture</option>
                                       <option value="Grocery">Grocery</option>
                                   </select>
                                   @error('item_category')
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror

                               </div>

                               <div class="col-md-6 form-group mt-3">
                                       <label for="item_quantity">{{ __('Quantity') }}</label>
                                       <input id="item_quantity" type="text" class="form-control @error('item_quantity') is-invalid @enderror" name="item_quantity"  required >

                                       @error('item_quantity')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                               </div>

                               <div class="col-md-12 form-group mt-3">
                                   <label for="item_description">{{ __('Description') }}</label>
                                   <textarea id="item_description" class="form-control @error('item_description') is-invalid @enderror" name="item_description" required autocomplete="item_description"></textarea>

                                   @error('item_description')
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                               </div>
                           </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Submit') }}
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
