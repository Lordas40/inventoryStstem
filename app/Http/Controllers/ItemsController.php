<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    // rodyt visus irasus (Read)
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    // rodyt forma naujam irasui sukurti (Create)
    public function create()
    {
        return view('items.create');
    }

    // issaugoti nauja irassa (Store)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'location' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'supplier_id' => 'required|exists:suppliers,id'
        ]);

        Item::create($validated);

        return redirect()->route('items.index')->with('success', 'Item added successfully');
    }

    // rodyti konkretu irasa (Read)
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    // Rodyti forma irasui redaguoti (Update)
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    // Atnaujinti irasa duomenu bazeje (Update)
    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'location' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'supplier_id' => 'required|exists:suppliers,id'
        ]);

        $item->update($validated);

        return redirect()->route('items.index')->with('success', 'Item updated successfully');
    }

    // istrinti irasa (Delete)
    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Item deleted successfully');
    }
}
