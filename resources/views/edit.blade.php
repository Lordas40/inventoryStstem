@extends('layout')

@section('content')
    <h1>Edit Item: {{ $item->name }}</h1>

    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $item->name) }}">
        @error('name') <p>{{ $message }}</p> @enderror

        <label for="category">Category:</label>
        <input type="text" name="category" id="category" value="{{ old('category', $item->category) }}">
        @error('category') <p>{{ $message }}</p> @enderror

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $item->quantity) }}">
        @error('quantity') <p>{{ $message }}</p> @enderror

        <label for="location">Location:</label>
        <input type="text" name="location" id="location" value="{{ old('location', $item->location) }}">
        @error('location') <p>{{ $message }}</p> @enderror

        <label for="condition">Condition:</label>
        <input type="text" name="condition" id="condition" value="{{ old('condition', $item->condition) }}">
        @error('condition') <p>{{ $message }}</p> @enderror

        <label for="supplier_id">Supplier:</label>
        <input type="number" name="supplier_id" id="supplier_id" value="{{ old('supplier_id', $item->supplier_id) }}">
        @error('supplier_id') <p>{{ $message }}</p> @enderror

        <button type="submit">Update</button>
    </form>
@endsection
