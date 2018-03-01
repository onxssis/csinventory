@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <a href="{{ route('products.create') }}" class="btn btn-default">
                    <i class="glyphicon glyphicon-plus"></i> &nbsp;
                    Add Product
                </a>
                <br><br>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Warehouse</th>
                                <th>Cost</th>
                                <th>Selling</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->warehouse->name }}</td>
                                        <td>{{ '&#8358;'. number_format($product->cost_price) }}</td>
                                        <td>{{ '&#8358;'. number_format($product->selling_price) }}</td>
                                        <td>{{ $product->quantity > 0 ? 'Available' : 'Low' }}</td>
                                        <td>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-xs btn-primary">Edit</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                                {{ csrf_field() }}

                                                {{ method_field('DELETE') }}

                                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                                    {{ csrf_field() }}

                                                    {{ method_field('DELETE') }}

                                                    <button class="btn btn-xs btn-danger" type="submit">
                                                        Delete
                                                    </button>
                                                </form>
                                            </form>
                                        </td>
                                    </tr>

                                @empty
                                    <div class="well text-center">
                                        No Products in Inventory &nbsp;
                                        <a href="{{ route('suppliers.create') }}"> Click here to add</a>
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