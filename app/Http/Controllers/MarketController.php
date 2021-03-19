<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('markets.list', ['markets' => Market::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('markets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $market = Market::create($request->input());
        return view('markets.show', ['market' => $market]);
    }

    /**
     * Display the specified resource.
     *
     * @param Market $market
     * @return \Illuminate\Http\Response
     */
    public function show(Market $market)
    {
        return view('markets.show', ['market' => $market]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Market $market
     * @return \Illuminate\Http\Response
     */
    public function edit(Market $market)
    {
        return view('markets.edit', ['market' => $market]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Market $market
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Market $market)
    {
        $market->fill($request->input());
        $market->save();
        return view('markets.show', ['market' => $market]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Market $market
     * @return \Illuminate\Http\Response
     */
    public function destroy(Market $market)
    {
        Market::destroy($market->id);
        return redirect()->route('markets.index');
    }
}
