@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <a href="{{ route('suppliers.create') }}" class="btn btn-default">
                    <i class="glyphicon glyphicon-plus"></i> &nbsp;
                    Add Supplier
                </a>
                <br><br>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($suppliers as $supplier)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $supplier->name }}</td>
                                        <td>{{ $supplier->email }}</td>
                                        <td>{{ $supplier->telephone }}</td>
                                        <td>{{ $supplier->address }}</td>
                                        <td>
                                            <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-xs btn-primary">Edit</a>
                                            <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="post">
                                                {{ csrf_field() }}

                                                {{ method_field('DELETE') }}

                                                <button class="btn btn-xs btn-danger" type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                @empty
                                    <div class="well text-center">No Suppliers <a href=""></a></div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection