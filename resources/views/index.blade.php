@extends('layout')

@section('content')
    <h1>All Items</h1>

    <!-- pranesimas apie sekminga veiksma -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- nuoroda naujam irasui prideti -->
    <a href="{{ route('items.create') }}">Add New Item</a>

    <!-- lentele -->
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->quantity }} pcs</td>
                    <td>
                        <!-- Nuoroda i redagavimo psl -->
                        <a href="{{ route('items.edit', $item->id) }}">Edit</a>
                        
                        <!-- istrynimo forma su patvirtinimu -->
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this item?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

