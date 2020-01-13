@extends('layouts.app')
@include('includes.navbar')

@section('content')
    <div class="row my-3">
        @include('includes.sidebar')
        <div class="col-md-9">
            <h1>Add product</h1>
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input name="product_name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input name="brand" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input name="price" type="text" class="form-control">
                </div>
                <input type="submit" value="Save" class="btn btn-primary">  
            </form>
        </div>
    </div>    
@endsection