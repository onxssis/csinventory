@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-md-2 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    <h4>
                        <strong>{{ $userCount }}</strong>
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                    <h4>
                        <strong>{{ $productCount }}</strong>
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="panel panel-warning">
                <div class="panel-heading">Orders</div>

                <div class="panel-body">
                    <h4>
                        <strong>{{ $orderCount }}</strong>
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="panel panel-success">
                <div class="panel-heading">Warehouses</div>

                <div class="panel-body">
                    <h4>
                        <strong>{{ $warehouseCount }}</strong>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
