@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <!-- user details -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <h5>{{ __('You are logged in as `User`!') }}</h5><br>
                            <h6>{{'name:  '.auth()->user()->name }}</h6>
                            <h6>{{'E-mail:  '.auth()->user()->email }}</h6>
                            <h6>{{'Created_at:  '.auth()->user()->created_at }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- orders details -->
            <div class="col-md-9">
                <div class="card">
                    @if(!is_null($orders->first()))
                        <div class="card-header">{{ __('Orders') }}</div>
                        <div style="padding:1%;text-align: center;width:100%">
                            <table style="width:100%">
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>order number</th>
                                    <th>no. items</th>
                                    <th>total price</th>
                                    <th>status</th>
                                    <th>created at</th>
                                    <th>updated at</th>
                                </tr>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>
                                            {{$order->id}}
                                        </td>
                                        <td>
                                            {{$order->first_name}} {{$order->last_name}}
                                        </td>
                                        <td>
                                            {{$order->order_number}}
                                        </td>
                                        <td>
                                            {{$order->item_count}}
                                        </td>
                                        <td>
                                            {{floatval($order->grand_total)}}
                                        </td>
                                        <td>
                                            {{$order->status}}
                                        </td>
                                        <td style="word-wrap: normal">
                                            {{$order->created_at}}
                                        </td>
                                        <td style="word-wrap: normal">
                                            {{$order->updated_at}}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                    @else
                        <div class="card-header">{{ __('Orders') }}</div>
                        <div style="padding:6%;text-align: center;width:100%">
                            <h2>There's no order</h2>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
@endsection
