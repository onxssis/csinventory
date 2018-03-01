@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <a href="{{ url()->previous() }}" class="btn btn-default">
                    <i class="glyphicon glyphicon-chevron-left"></i> &nbsp;
                    Go Back
                </a>
                <br><br>

                <div class="panel panel-default">
                    <div class="panel-heading">Edit Supplier</div>

                    <div class="panel-body">
                        <form method="POST" action="{{ route('suppliers.update', $supplier->id) }}">
                            {{ csrf_field() }}

                            {{ method_field('PATCH') }}

                            @include('suppliers._form', [
                                'buttonText' => 'Update Supplier'
                            ])

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection