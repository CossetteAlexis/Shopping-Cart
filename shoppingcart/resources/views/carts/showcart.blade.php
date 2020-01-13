@extends('layouts.app')
@include('includes.navbar')

@section('content')
    <div class="row my-3">
        @include('includes.sidebarcart')
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('/images/card4.jpg') }}" alt="Wala usa">
                    <div class="card-body">
                    <h4 class="card-title">{{ $product->product_name }} <span class="float-right"><strong>150.00</strong></span></h4>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Fit</a>
                        <form class="d-inline" action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Buy" onclick="return confirm('Are you sure you want to delete this item?');">
              
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection