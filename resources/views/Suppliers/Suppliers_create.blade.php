@extends('home')

@section('content')

<h2>Add new Supplier</h2>

<form method="POST" action="{{ route('suppliers.store') }}">
@csrf

<div>
<label for="name">Name company: </label>
<input type="text" name="name" id="name" required>
</div>

<div>
<label for="contact_name">Contact name: </label>
<input type="text" name="contact_name" id="contact_name" required>
</div>

<div>
<label for="email">Email: </label>
<input type="text" name="email" id="email" required>
</div>

<div>
<label for="phone">Phone: </label>
<input type="text" name="phone" id="phone" required>
</div>

<button type="submit">Create new Supplier!</button>
</form>
@endsection