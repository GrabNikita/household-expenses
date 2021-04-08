<?php

namespace App\Http\Controllers;

use App\Models\BasketItem;
use App\Models\Manufacturer;
use App\Models\Market;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('products.list', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create', [
            'basketItems' => BasketItem::all(),
            'manufacturers' => Manufacturer::all(),
            'markets' => Market::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->input());
        $product->markets()->sync($request->input('markets'));
        $product->save();
        return view('products.show', ['product' => $product]);
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product,
            'basketItems' => BasketItem::all(),
            'manufacturers' => Manufacturer::all(),
            'markets' => Market::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return Response
     */
    public function update(Request $request, Product $product)
    {
        $product->fill($request->input());
        $product->markets()->sync($request->input('markets'));
        $product->save();
        return view('products.show', ['product' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect()->route('products.index');
    }
}
