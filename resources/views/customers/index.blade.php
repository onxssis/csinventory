@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <a href="{{ route('customers.create') }}" class="btn btn-default">
                    <i class="glyphicon glyphicon-plus"></i> &nbsp;
                    Add Customer
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
                                <th>Telephone</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($customers as $customer)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->telephone }}</td>
                                        <td>{{ $customer->address1 }}</td>

                                        <td>
                                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-xs btn-primary">Edit</a>
                                            <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
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
                                        No Customers &nbsp;
                                        <a href="{{ route('customers.create') }}"> Click here to add</a>
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