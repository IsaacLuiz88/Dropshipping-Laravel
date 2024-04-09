@extends('welcome')

@section('section')

<h2>Products on Category</h2>
<ul>
    @foreach($products as $product)
        <li> {{ $product->nome }} </li>
    @endforeach
</ul>

@endsection