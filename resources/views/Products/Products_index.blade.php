@extends('./welcome')

@section('content')

<a href="{{ route('home') }}">Home</a><br>
<div class="container">
    @foreach ($products as $product)
    <div class="product">
        <li>
            Category:   {{ $product->name }} <br>
            Description: {{ $product->description }} <br>
            Price US$:      {{ $product->price }} <br>
            Quantity:      {{ $product->stock_quantity }} <hr>
        </li>
    </div>
    @endforeach
</div>
@endsection