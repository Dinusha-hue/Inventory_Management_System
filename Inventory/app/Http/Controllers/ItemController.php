<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Item::create($request->all());

        return redirect()->route('items.index')->with('success', 'Item created successfully.');
    }

    public function show(string $id)
    {
        $item = Item::findOrFail($id);
        return view('items.show', compact('item'));
    }

    public function edit(string $id)
    {
        $item = Item::findOrFail($id);
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }

    public function destroy(string $id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
}
