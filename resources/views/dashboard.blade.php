@extends('layouts.app')

@section('contents')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Dashboard Statistics
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Number of Products: {{ $productCount }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product list content here -->
@endsection
