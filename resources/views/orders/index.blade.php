@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <a href="{{ route('orders.create') }}" class="btn btn-default">
                    <i class="glyphicon glyphicon-plus"></i> &nbsp;
                    Add Sales Order
                </a>
                <br><br>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Order No</th>
                                <th>Product</th>
                                <th>Shipping From</th>
                                <th>Shipping To</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($orders as $order)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $order->order_no }}</td>
                                        <td>{{ $order->product->name }}</td>
                                        <td>{{ $order->product->warehouse->name }}</td>
                                        <td>{{ $order->customer->name }}</td>
                                        <td class="text-center">{{ number_format($order->quantity) }}</td>
                                        <td>{{ '&#8358;'. number_format($order->amount_total) }}</td>
                                        <td>{{ ucfirst($order->status) }}</td>
                                        <td>
                                            {{-- <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-xs btn-primary">Edit</a>--}}
                                            <form action="{{ route('orders.destroy', $order->id) }}" method="post">
                                                {{ csrf_field() }}

                                                {{ method_field('DELETE') }}

                                                <button class="btn btn-xs btn-danger" type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                @empty
                                    <div class="well text-center">
                                        No Sales Orders Yet &nbsp;
                                        <a href="{{ route('orders.create') }}"> Click here to add</a>
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection