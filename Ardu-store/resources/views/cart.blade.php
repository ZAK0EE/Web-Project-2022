@extends('layout')
@section('content')
    <div class="container mt-5">
        @if(!$cartItems->first())
            <div class="justify-content-center" style="padding: 10%;margin: auto;text-align: center">
                <h1>cart is empty</h1>
            </div>
        @else
            <div class="row justify-content-center">
                <!-- left side -->
                <div class="col-md-9">
                    <div class="cart-container ">
                        <div class="Massage "
                             style="background: green;border-radius: 5px;width: fit-content;padding: 0 1% 0 1%">
                            @if ($message = Session::get('success'))
                                <div class="MassageHold ">
                                    <p class="Massage" style="color: white">{{ $message }}</p>
                                </div>
                            @endif
                        </div>
                        <h3 style="text-align: center;width: 100%;margin: auto;">Cart List</h3>
                        <div class="CartList mr-5" style="text-align: center;">
                            <table style="text-align: center" class="Carttable">
                                <thead>
                                <tr class="Carttable-Header">
                                    <th class="Carttable-Header-img" style="width:15%;padding-bottom: 5%"></th>
                                    <th class="Carttable-Header-name" style="width:20%">Name</th>
                                    <th class="Carttable-Header-Quantity" style="width:35%">Quantity</th>
                                    <th class="Carttable-Header-price" style="width:15%"> price</th>
                                    <th class="Carttable-Header-remove" style="width:15%"> Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($cartItems as $item)
                                    <tr>
                                        <td class="carttable-item">
                                            <a href="/products/{{ $item->id }}">
                                                <img src="{{ $item->attributes->image }}" class="carttable-item-img"
                                                     style="width:90%" alt="Thumbnail">
                                            </a>
                                        </td>
                                        <td style="width:40%">
                                            <a href="/products/{{ $item->id }}">
                                                <p class="carttable-item-name" style="width:85%">{{ $item->name }}</p>
                                            </a>
                                        </td>
                                        <td class="carttable-item-quanitity" style="width:30%;padding-top: 6%;">
                                            <div class="carttable-item-quanitity" style="width:100%;margin: auto;">
                                                <form action="{{ route('cart.update') }}" method="POST"
                                                      style="width:300%;margin: auto">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <input type="number" name="quantity" min="1" style="width: 25%;height: 50px;line-height: 1.65;
                                            margin: auto;padding-left: 10%;border: 1px solid #eee;"
                                                           value="{{ $item->quantity }}"/>
                                                    <button type="submit" class="btn btn-primary">update</button>
                                                </form>
                                            </div>

                                        </td>
                                        <td class="carttable-item-price">
                                            <span class="carttable-item-price">
                                                ${{ $item->price }}
                                            </span>
                                        </td>
                                        <td class="carttable-item-remove">
                                            <form action="{{ route('cart.remove') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $item->id }}" name="id">
                                                <button class="btn btn-danger">x</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <!-- right side -->
                <div class="col-md-3">
                    <h3> Total ${{ Cart::getTotal() }}</h3>
                    <div>
                        <div>
                            <a href="/checkout" class="btn btn-primary" style="width: 100%;margin-bottom: 2%">Checkout</a>
                        </div>
                        <div style="width: 100%;">
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger" style="width: 60%;float:left;">Remove <br> Cart</button>
                            </form>
                            <a href="/" class="btn btn-warning" style="width: 37%;float:right;margin-bottom: 2%;">Continue
                                shopping</a>
                        </div>

                    </div>
                </div>

            </div>
        @endif
    </div>
@endsection
