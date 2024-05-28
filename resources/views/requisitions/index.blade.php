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
                                    <th scope="col">Approval Status</th>
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
                                        <td>
                                            @if ($requisition->status == 'approved')
                                                <span class="text-success fw-bold">{{ $requisition->status }}</span>
                                            @elseif ($requisition->status == 'rejected')
                                                <span class="text-danger fw-bold">{{ $requisition->status }}</span>
                                            @else
                                                <span class="text-warning">{{ $requisition->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('requisitions.update', $requisition->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" name="status" value="approved" class="btn btn-success btn-sm">Approve</button>
                                                <button type="submit" name="status" value="rejected" class="btn btn-danger btn-sm">Reject</button>
                                            </form>
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
