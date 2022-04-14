@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Details') }}</h3>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <h4>
                                {{'name:  '.auth()->user()->name }}
                            </h4>
                            <h4>
                                {{'E-mail:  '.auth()->user()->email }}
                            </h4>
                            <h4>
                                {{'Created_at:  '.auth()->user()->created_at }}
                            </h4>
                            <a href="/cart">
                                <img class="header-profile" style="width: 10%;margin-right: 7%;" src="img/shopping-cart.png" alt="go to your cart">
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
