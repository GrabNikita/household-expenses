<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class IndexController {
    public function __invoke() {
        $receipts = Auth::user()->receipts()->paginate();
        return view('index', ['receipts' => $receipts]);
    }
}
