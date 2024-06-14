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
                        <form method="POST" action="{{ route('suppliers.store') }}">
                            @csrf

                           <div class="row">
                               <div class="col-md-6 form-group">
                                       <label for="supplier_name">{{ __('Supplier Name') }}</label>
                                       <input id="supplier_name" type="text" class="form-control @error('supplier_name') is-invalid @enderror" name="supplier_name"  required >
                                       @error('supplier_name')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                               </div>
                               <div class="col-md-6 form-group">
                                       <label for="account_number">{{ __('Account Number') }}</label>
                                       <input id="account_number" type="text" class="form-control @error('account_number') is-invalid @enderror" name="account_number"  required >
                                       @error('account_number')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                               </div>

                               <div class="col-md-8 form-group mt-3">
                                   <label for="preferred_payment_method">{{ __('Payment Method') }}</label>
                                   <select name="preferred_payment_method" class="form-control " id="preferred_payment_method">
                                       <option value="">Select Payment</option>
                                       <option value="Cash">Cash</option>
                                       <option value="Paynow">Paynow</option>
                                       <option value="Master Card">Master Card</option>
                                       <option value="Visa Card">Visa Card</option>
                                       <option value="ALL">ALL</option>
                                   </select>
                                   @error('preferred_payment_method')
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror

                               </div>

                           </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Add') }}
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
