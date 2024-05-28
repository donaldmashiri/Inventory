@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h5>  <i class="bi bi-grid-3x3-gap"></i></i> Dashboard </h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="card-title">Department Role</h5>
                                        <p class="card-text">{{ Auth::user()->role }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title">Full Names</h5>
                                        <p class="card-text">{{ Auth::user()->name }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title">Email</h5>
                                        <p class="card-text">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
