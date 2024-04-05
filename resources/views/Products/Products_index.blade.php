@extends('./welcome')

@section('content')

@foreach ($products as $product)
    <li>
        {{ $product->name }} | 
        {{ $product->description }} | 
        {{ $product->price }}
    </li>
@endforeach
@endsection