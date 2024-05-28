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
                            <a href="{{route('requisitions.index')}}" class="btn btn-secondary btn-sm justify-content-end"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('layouts.messages')
                        <form method="POST" action="{{ route('requisitions.store') }}">
                            @csrf

                           <div class="row">

                               <div class="col-md-6 form-group mt-3">
                                   <label for="item_id">{{ __('Select Item') }}</label>
                                   <select name="item_id" class="form-control " id="item_id">
                                       <option value="">Select Item</option>
                                       @foreach($items as $item)
                                           <option value="{{$item->id}}">{{$item->item_name}}</option>
                                       @endforeach

                                   </select>
                                   @error('item_id')
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror

                               </div>

                               <div class="col-md-6 form-group mt-3">
                                       <label for="quantity">{{ __('Quantity') }}</label>
                                       <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity"  required >

                                       @error('quantity')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                               </div>

                               <div class="col-md-12 form-group mt-3">
                                   <label for="reason">{{ __('Reason') }}</label>
                                   <textarea id="reason" class="form-control @error('reason') is-invalid @enderror" name="reason" required autocomplete="reason"></textarea>
                                   @error('reason')
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                               </div>
                           </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send') }}
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
