@extends('welcome')

@section('content')
<!-- resources/views/products/create.blade.php -->
<form method="POST" action="{{ route('products.store') }}">
    @csrf

    <div>
        <label for="name">Nome do Produto:</label>
        <input type="text" name="name" id="name" required>
    </div><br>

    <div>
        <label for="description">Descrição:</label>
        <textarea name="description" id="description"></textarea>
    </div><br>

    <div>
        <label for="price">Preço:</label>
        <input type="number" name="price" id="price" required>
    </div><br>

    <div>
        <label for="stock_quantity">Quantidade em Estoque:</label>
        <input type="number" name="stock_quantity" id="stock_quantity" required>
    </div><br>

    <div>
        <label for="category">Categoria:</label>
        <select name="category" id="category">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div><br>

    <button type="submit">Criar Produto</button>
</form>
@endsection