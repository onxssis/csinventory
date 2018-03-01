@extends('layouts.app')

@section('content')

    <order-view inline-template>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="alert alert-danger" v-if="feedback">

                        @{{ feedback }}

                    </div>

                    <a href="{{ url()->previous() }}" class="btn btn-default">
                        <i class="glyphicon glyphicon-chevron-left"></i> &nbsp;
                        Go Back
                    </a>
                    <br><br>

                    <div class="panel panel-default">
                        <div class="panel-heading">Add Sales Order</div>

                        <div class="panel-body">
                            <form method="POST" @submit.prevent="submitOrderForm">
                                {{ csrf_field() }}

                                @include('orders._form')


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </order-view>

@endsection