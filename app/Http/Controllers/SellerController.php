<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Item;
use Illuminate\Support\Str;

class SellerController extends Controller
{
    public function create()
    {
        return view('ranu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'items' => 'required|array',
            'items.*.item_code' => 'required|string',
            'items.*.item_name' => 'required|string',
        ]);

        $seller = Seller::create([
            'name' => $request->name,
            'location' => $request->location,
            'location_code' => Str::random(8),
            'tracking_number' => 'TRK-' . strtoupper(Str::random(10)),
        ]);

        foreach ($request->items as $itemData) {
            Item::create([
                'seller_id' => $seller->id,
                'item_code' => $itemData['item_code'],
                'item_name' => $itemData['item_name'],
                'group' => Str::slug($seller->name),
            ]);
        }

        return redirect()->back()->with('success', 'Seller and items created successfully.');
    }
}
