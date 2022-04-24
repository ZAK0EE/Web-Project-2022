@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <!-- user details -->
            <div @if(!is_null($orders))class="col-md-3"@else class="col-md-8"@endif>
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <h5>{{ __('You are logged in as `Admin`!') }}</h5>
                            <h6>{{'name:  '.auth()->user()->name }}</h6>
                            <h6>{{'E-mail:  '.auth()->user()->email }}</h6>
                            <h6>{{'Created_at:  '.auth()->user()->created_at }}</h6>
                        </div>
                        <br>
                        <div>
                            <a class="btn btn-warning" href="product/new">create new Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- orders details -->
            @if(!is_null($orders))
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">{{ __('Orders') }}</div>
                        <div style="padding:1%;text-align: center;width:100%">
                            <table style="width:100%">
                                <tr>
                                    <th>id</th>
                                    <th>user id</th>
                                    <th>product id</th>
                                    <th>product name</th>
                                    <th>quantity</th>
                                    <th>total price</th>
                                    <th>status</th>
                                    <th>created at</th>
                                    <th>updated at</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                                @foreach($orders as $order)
                                    @php
                                        $product=Illuminate\Support\Facades\DB::table('products')->where('id',$order->product_id)->get();
                                        $name=json_decode($product, true)[0]['name'];
                                        $price=json_decode($product, true)[0]['price'];
                                        $total_price=$price*$order->quantity;
                                    @endphp
                                    <tr>
                                        <td>
                                            {{$order->id}}
                                        </td>
                                        <td>
                                            {{$order->user_id}}
                                        </td>
                                        <td>
                                            {{$order->product_id}}
                                        </td>
                                        <td style="word-wrap: normal">
                                            {{$name}}
                                        </td>
                                        <td>
                                            {{$order->quantity}}
                                        </td>
                                        <td>
                                            {{$total_price}}
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
                                        <td>
                                            <a class="btn btn-primary" href="order/verify/{{$order->id}}">Verify</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" href="order/cancel/{{$order->id}}">Cancel</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                        </div>
                    </div>
                </div>


            @endif
        </div>
    </div>
@endsection
