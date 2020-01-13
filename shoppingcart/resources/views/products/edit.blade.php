@extends('layouts.app')
@section('content')
    <h1>Edit Post</h1>
    {{-- {!! Form::open(['action' => ['PostsController@update', $post->id],'method'=>'POST']) !!}
    @method('PUT')
        <div class="form-group">
            {{Form::label('product_name', 'Product Name')}}
            {{Form::text('product_name', '', ['class'=> 'form-control', 'placeholder'=>'Product Name', 'value' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('brand', 'Brand')}}
            {{Form::text('brand', '', ['class'=> 'form-control', 'placeholder'=>'Brand'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::text('price', '', ['class'=> 'form-control', 'placeholder'=>'Price'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn-primary'])}}
    {!! Form::close() !!} --}}

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input name="product_name" type="text" class="form-control" value="{{ $product->product_name }}">
        </div>
        <input type="submit" value="Save" class="btn btn-primary">  
    </form>
@endsection