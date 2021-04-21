<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class IndexController {
    public function __invoke() {
        $receipts = Auth::user()->receipts()->paginate(1);
        return view('index', ['receipts' => $receipts]);
    }
}
