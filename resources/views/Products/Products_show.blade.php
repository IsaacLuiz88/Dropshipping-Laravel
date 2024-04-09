@extends('welcome')

@section('section')

<h2>Category</h2>
<ul>
    @foreach($products as $product)
        <li> {{ $product->nome }} </li>
    @endforeach
</ul>

@endsection