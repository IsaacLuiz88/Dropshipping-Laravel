@extends('welcome')

@section('content')
<a href="{{ route('categories.index') }}">Back to Categories</a>

<h2>Products in Category: {{ $category->name }}</h2>

@foreach($products as $product)
    <div>
        <p>Product Name: {{ $product->name }}</p>
        <p>Description: {{ $product->description }}</p>
        <p>Price: ${{ $product->price }}</p>
        <!-- Adicione mais informações conforme necessário -->
    </div>
@endforeach
@endsection
