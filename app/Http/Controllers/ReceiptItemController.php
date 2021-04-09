<?php

namespace App\Http\Controllers;

use App\Models\ReceiptItem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ReceiptItemController extends Controller {

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {
        $data = $request->input();
        $receipt = Auth::user()->receipts()->find($data['receipt']);
        $receipt->receiptItems()->create($data);
        return view('receipts.show', [
            'receipt' => $receipt,
            'products' => $receipt->market->products,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ReceiptItem $receiptItem
     * @return Response
     */
    public function update(Request $request, ReceiptItem $receiptItem) {
        if ($receiptItem->receipt->user->id !== Auth::user()->id) abort(404);
        $receiptItem->fill($request->input());
        $receiptItem->save();
        return view('receipts.show', [
            'receipt' => $receiptItem->receipt,
            'products' => $receiptItem->receipt->market->products,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ReceiptItem $receiptItem
     * @return Response
     */
    public function destroy(ReceiptItem $receiptItem) {
        if ($receiptItem->user->id !== Auth::user()->id) abort(404);

    }
}
