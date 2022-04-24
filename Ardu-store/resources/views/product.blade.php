@extends('layout')

@section('content')
    <div class="container mt-30">
        <div class="product-container">

            <!-- Left Column / Products Image -->
            <div class="left-column">
                <img src='{{$product->image}}' alt="product">
            </div>

            <!-- Right Column -->
            <div class="right-column">

                <!-- Product Description -->
                <div class="product-description">
                    <!-- <span>Headphones</span> uncomment this to be used as category -->
                    <h1>{{$product->name}}</h1>
                    <p>{{$product->description}}</p>
                </div>

                <!-- Product Pricing -->
                <div class="product-price">
                    <span>${{$product->price}}</span>
                    {{-- <a href="../../../../../cart/?id={{$product->id}}&quantity=1" class="cart-btn">Add to cart</a> --}}
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="cart-btn">Add To Cart</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection

