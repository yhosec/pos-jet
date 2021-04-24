<?php


namespace App\Http\Controllers\Master;


use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laravel\Jetstream\Jetstream;

class ItemsController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::where('store_id', 1)->get();
        return Jetstream::inertia()->render(
            $request,
            'Master/Items/Index',
            compact('items')
        );
    }

    function formAdd(Request $request)
    {
        return Jetstream::inertia()->render(
            $request,
            'Master/Items/Create'
        );
    }

    function doAdd(Request $request)
    {
        $request->validate([
            'code' => ['required', 'unique:items', 'max:100'],
            'name' => ['required', 'max:255'],
            'qty' => ['required'],
            'price' => ['required'],
        ]);
        $item = new Item();
        $item->code = $request->input('code');
        $item->name = $request->input('name');
        $item->qty = $request->input('qty');
        $item->price = $request->input('price');
        $item->store_id = 1;
        $item->save();
        return Redirect::route('master.items.index');
    }

    function formEdit($id, Request $request)
    {
        $item = Item::find($id);
        return Jetstream::inertia()->render(
            $request,
            'Master/Items/Edit',
            compact('id', 'item')
        );
    }

    function doEdit($id, Request $request)
    {
        $request->validate([
            'code' => ['required', 'max:100'],
            'name' => ['required', 'max:255'],
            'qty' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
        ]);
        $item = Item::find($id);
        $item->code = $request->input('code');
        $item->name = $request->input('name');
        $item->qty = $request->input('qty');
        $item->price = $request->input('price');
        $item->store_id = 1;
        $item->save();
        return Redirect::route('master.items.index');
    }
}
