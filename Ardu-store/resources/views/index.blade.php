@extends('layout')

@section('content')
    <div class="container mt-30">
        <div class="row">


            @foreach($products as $product)

                <div class="col-md-4 col-sm-6" >
                    <div class="card mb-30"><a class="card-img-tiles" href="/products/{{$product->id}}" data-abc="true">
                            <div class="inner">
                                <div class="main-img"><img src='{{$product->image}}' alt="product"></div>
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <a href="/products/{{$product->id}}">
                                <h4 class="card-title">{{ucfirst($product->name)}}</h4>
                            </a>
                            <h5 class="card-title">{{$product->price}}$</h5>
                            <a class="btn btn-outline-danger btn-sm" href="/products/{{$product->id}}" data-abc="true">View Products</a>
                        </div>
                    </div>
                </div>


            @endforeach


        </div>
    </div>
@endsection
