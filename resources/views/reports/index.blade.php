@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <h5 style="background-color: saddlebrown" class="card-header text-white"> Users Reports</h5>
                                    <table class="w-full table table-striped">
                                        <thead>
                                        <tr class="bg-gray-100">
                                            <th class="py-3 px-4 text-left">Description</th>
                                            <th class="py-3 px-4 text-left">Count</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="border-t text-sm">
                                            <td class="py-3 px-4"><i class="fas fa-star text-info"></i>Users Total</td>
                                            <td class="py-3 px-4">{{$usersCount}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="card">
                                    <h5 style="background-color: sandybrown" class="card-header text-white"> Inventory</h5>
                                    <table class="w-full table table-striped">
                                        <thead>
                                        <tr class="bg-gray-100">
                                            <th class="py-3 px-4 text-left">Description</th>
                                            <th class="py-3 px-4 text-left">Count</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="border-t text-sm">
                                            <td class="py-3 px-4"><i class="bi bi-list-stars text-primary"></i> Total Items</td>
                                            <td class="py-3 px-4">{{ $itemsCount }}</td>
                                        </tr>
                                        <tr class="border-t text-sm">
                                            <td class="py-3 px-4"><i class="bi bi-exclamation-triangle text-danger"></i> Extremely Low</td>
                                            <td class="py-3 px-4">{{ $itemsExLowCount }}</td>
                                        </tr>
                                        <tr class="border-t text-sm">
                                            <td class="py-3 px-4"><i class="bi bi-arrow-down-circle text-warning"></i> Low</td>
                                            <td class="py-3 px-4">{{ $itemsLowCount }}</td>
                                        </tr>
                                        <tr class="border-t text-sm">
                                            <td class="py-3 px-4"><i class="bi bi-check-circle text-success"></i> Available</td>
                                            <td class="py-3 px-4">{{ $itemsAvailableCount }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="card">
                                    <h5 style="background-color: rosybrown" class="card-header text-white"> Requisition</h5>
                                    <table class="w-full table table-striped">
                                        <thead>
                                        <tr class="bg-gray-100">
                                            <th class="py-3 px-4 text-left">Description</th>
                                            <th class="py-3 px-4 text-left">Count</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="border-t text-sm">
                                            <td class="py-3 px-4"><i class="bi bi-clipboard-data text-primary"></i> Total Items Requested</td>
                                            <td class="py-3 px-4">{{ $reqCount }}</td>
                                        </tr>
                                        <tr class="border-t text-sm">
                                            <td class="py-3 px-4"><i class="bi bi-check-square text-success"></i> Approved</td>
                                            <td class="py-3 px-4">{{ $reqACount }}</td>
                                        </tr>
                                        <tr class="border-t text-sm">
                                            <td class="py-3 px-4"><i class="bi bi-x-square text-danger"></i> Rejected</td>
                                            <td class="py-3 px-4">{{ $reqRCount }}</td>
                                        </tr>
                                        <tr class="border-t text-sm">
                                            <td class="py-3 px-4"><i class="bi bi-clock text-warning"></i> Pending</td>
                                            <td class="py-3 px-4">{{ $reqPCount }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
