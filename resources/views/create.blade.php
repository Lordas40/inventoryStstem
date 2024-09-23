@extends('layout')

@section('content')
    <h1>Create New Item</h1>

    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name') <p>{{ $message }}</p> @enderror

        <label for="category">Category:</label>
        <input type="text" name="category" id="category" value="{{ old('category') }}">
        @error('category') <p>{{ $message }}</p> @enderror

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" value="{{ old('quantity') }}">
        @error('quantity') <p>{{ $message }}</p> @enderror

        <label for="location">Location:</label>
        <input type="text" name="location" id="location" value="{{ old('location') }}">
        @error('location') <p>{{ $message }}</p> @enderror

        <label for="condition">Condition:</label>
        <input type="text" name="condition" id="condition" value="{{ old('condition') }}">
        @error('condition') <p>{{ $message }}</p> @enderror

        <label for="supplier_id">Supplier:</label>
        <input type="number" name="supplier_id" id="supplier_id" value="{{ old('supplier_id') }}">
        @error('supplier_id') <p>{{ $message }}</p> @enderror

        <button type="submit">Create</button>
    </form>
@endsection
