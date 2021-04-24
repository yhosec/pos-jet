<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;

class PosController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::where('store_id', 1)->get();
        return Jetstream::inertia()->render(
            $request,
            'Pos/Index',
            compact('items')
        );
    }
}
