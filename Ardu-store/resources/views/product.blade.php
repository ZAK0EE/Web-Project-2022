@extends('layout')

@section('content')

<div class="product-container">
 
    <!-- Left Column / Headphones Image -->
    <div class="left-column">
        <img src="{{ URL::to('/img/head.png') }}" alt="" />
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
        <span>{{$product->price}}</span>
        <a href="#" class="cart-btn">Add to cart</a>
      </div>
    </div>
</div>
@endsection
