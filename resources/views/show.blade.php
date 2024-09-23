@extends('layout')

@section('content')
    <h1>Item: {{ $item->name }}</h1>

    <ul>
        <li>Category: {{ $item->category }}</li>
        <li>Quantity: {{ $item->quantity }}</li>
        <li>Location: {{ $item->location }}</li>
        <li>Condition: {{ $item->condition }}</li>
        <li>Supplier ID: {{ $item->supplier_id }}</li>
    </ul>

    <a href="{{ route('items.edit', $item->id) }}">Edit</a>
@endsection
