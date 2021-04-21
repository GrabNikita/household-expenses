<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Market;
use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ReceiptController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $receipts = Auth::user()->receipts()->paginate();
        return view('receipts.list', ['receipts' => $receipts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('receipts.create', [
            'baskets' => Basket::all(),
            'markets' => Market::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {
        $receipt = Auth::user()->receipts()->create($request->input());
        return view('receipts.show', ['receipt' => $receipt]);
    }

    /**
     * Display the specified resource.
     *
     * @param Receipt $receipt
     * @return Response
     */
    public function show(Receipt $receipt) {
        if ($receipt->user->id !== Auth::user()->id) abort(404);
        return view('receipts.show', [
            'receipt' => $receipt,
            'products' => $receipt->market->products,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Receipt $receipt
     * @return Response
     */
    public function edit(Receipt $receipt) {
        if ($receipt->user->id !== Auth::user()->id) abort(404);
        return view('receipts.edit', [
            'receipt' => $receipt,
            'baskets' => Basket::all(),
            'markets' => Market::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Receipt $receipt
     * @return Response
     */
    public function update(Request $request, Receipt $receipt) {
        if ($receipt->user->id !== Auth::user()->id) abort(404);
        $receipt->fill($request->input());
        $receipt->save();
        return view('receipts.show', ['receipt' => $receipt]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Receipt $receipt
     * @return Response
     */
    public function destroy(Receipt $receipt) {
        if ($receipt->user->id !== Auth::user()->id) abort(404);
        Receipt::destroy($receipt->id);
        return redirect()->route('receipts.index');
    }
}
