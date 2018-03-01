@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <a href="{{ route('warehouses.create') }}" class="btn btn-default">
                    <i class="glyphicon glyphicon-plus"></i> &nbsp;
                    Add Warehouse
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
                                <th>Location</th>
                                <th>No of Products</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($warehouses as $warehouse)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $warehouse->name }}</td>
                                        <td>{{ $warehouse->code }}</td>
                                        <td>{{ $warehouse->location }}</td>
                                        <td>{{ $warehouse->getNumberOfProducts() }}</td>
                                        <td>
                                            <a href="{{ route('warehouses.edit', $warehouse->id) }}" class="btn btn-xs btn-primary">Edit</a>
                                            <form action="{{ route('warehouses.destroy', $warehouse->id) }}" method="post">
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
                                        No Warehouse &nbsp;
                                        <a href="{{ route('suppliers.create') }}"> Click here to create</a>
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