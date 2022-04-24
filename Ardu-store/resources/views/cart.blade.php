@extends('layout')
@section('content')
    <main class="Cart-container">
        <div class="cart-container">
            <div class="Cart-all">
                <div class="Massage">
                    @if ($message = Session::get('success'))
                        <div class="MassageHold">
                            <p class="Massage">{{ $message }}</p>
                        </div>
                    @endif
                    <h3 class="CartListWord">Cart List</h3>
                    <div class="CartList">
                        <table id="cart class="        Carttable" cellspacing="0">
                            <thead>
                                <tr class="Carttable-Header">
                                    <th class="Carttable-Header-img"></th>
                                    <th class="Carttable-Header-name">Name</th>
                                    <th class="Carttable-Header-Quantity">
                                        <span class="hidden lg:inline">Quantity</span>
                                    </th>
                                    <th class="Carttable-Header-price"> price</th>
                                    <th class="Carttable-Header-remove"> Remove </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                    <tr>
                                        <td class="carttable-item">
                                            <a href="/products/{{ $item->id }}">
                                                <img src="{{ $item->attributes->image }}" class="carttable-item-img"
                                                    alt="Thumbnail">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/products/{{ $item->id }}">
                                                <p class="carttable-item-name">{{ $item->name }}</p>

                                            </a>
                                        </td>
                                        <td class="carttable-item-quanitity">
                                            <div class="carttable-item-quanitity">

                                                <form action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <input type="number" name="quantity" min="1"
                                                        value="{{ $item->quantity }}"
                                                        class="carttable-item-quanitity-btn" />
                                                    <button type="submit" class="carttable-item-update-btn">update</button>
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
                                                <button class="carttable-item-remove-btn">x</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><a href="/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                                            Shopping</a></td>
                                    <td colspan="2" class="hidden-xs"></td>
                                    <td class="hidden-xs text-center"><strong> Total ${{ Cart::getTotal() }}</strong>
                                    </td>
                                    <td>
                                        <form action="{{ route('cart.clear') }}" method="POST">
                                            @csrf
                                            <button class="carttable-remove-btn">Remove All Cart</button>
                                        </form>
                                    <td><a href="#" class="btn btn-success btn-block">Checkout <i
                                                class="fa fa-angle-right"></i></a></td>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
