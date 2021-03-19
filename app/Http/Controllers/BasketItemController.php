<?php


namespace App\Http\Controllers;


use App\Models\BasketItem;
use Illuminate\Http\Request;

class BasketItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('basket-items.list', ['basketItems' => BasketItem::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('basket-items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $basketItem = BasketItem::create($request->input());
        return view('basket-items.show', ['basketItem' => $basketItem]);
    }

    /**
     * Display the specified resource.
     *
     * @param BasketItem $basketItem
     * @return \Illuminate\Http\Response
     */
    public function show(BasketItem $basketItem)
    {
        return view('basket-items.show', ['basketItem' => $basketItem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  BasketItem $basketItem
     * @return \Illuminate\Http\Response
     */
    public function edit(BasketItem $basketItem)
    {
        return view('basket-items.edit', ['basketItem' => $basketItem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  BasketItem $basketItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BasketItem $basketItem)
    {
        $basketItem->fill($request->input());
        $basketItem->save();
        return view('basket-items.show', ['basketItem' => $basketItem]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  BasketItem $basketItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasketItem $basketItem)
    {
        BasketItem::destroy($basketItem->id);
        return redirect()->route('basket-items.index');
    }
}
