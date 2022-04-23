@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4>{{ __('You are logged in as `USER`!') }}

                            <h6>
                                {{'name:  '.auth()->user()->name }}
                            </h6>
                            <h6>
                                {{'E-mail:  '.auth()->user()->email }}
                            </h6>
                            <h6>
                                {{'Created_at:  '.auth()->user()->created_at }}
                            </h6>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
