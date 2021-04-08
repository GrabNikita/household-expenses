<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('baskets.list', ['baskets' => Auth::user()->baskets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('baskets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $basket = Auth::user()->baskets()->create($request->input());
        return view('baskets.show', ['basket' => $basket]);
    }

    /**
     * Display the specified resource.
     *
     * @param Basket $basket
     * @return Response
     */
    public function show(Basket $basket)
    {
        if ($basket->creator->id !== Auth::user()->id) abort(404);
        return view('baskets.show', ['basket' => $basket]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Basket $basket
     * @return Response
     */
    public function edit(Basket $basket)
    {
        if ($basket->creator->id !== Auth::user()->id) abort(404);
        return view('baskets.edit', ['basket' => $basket]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Basket $basket
     * @return Response
     */
    public function update(Request $request, Basket $basket)
    {
        if ($basket->creator->id !== Auth::user()->id) abort(404);
        $basket->fill($request->input());
        $basket->save();
        return view('baskets.show', ['basket' => $basket]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Basket $basket
     * @return Response
     */
    public function destroy(Basket $basket)
    {
        if ($basket->creator->id !== Auth::user()->id) abort(404);
        Basket::destroy($basket->id);
        return redirect()->route('baskets.index');
    }
}
