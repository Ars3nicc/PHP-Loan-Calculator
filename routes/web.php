<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

const DEFAULT_AMOUNT = '0.00';

Route::match(array('GET', 'POST'), '/', function (Request $request) {
    if ($request->isMethod('post')) {
        $loan = $request->input('loan');
        $months = $request->input('months');
        $interest = $loan * 0.01 * $months;

        try {
            $amortization = ($loan + $interest) / $months;
        } catch (DivisionByZeroError) {
            $amortization = DEFAULT_AMOUNT;
        }

        if ($amortization != DEFAULT_AMOUNT) {
            $loan = number_format($loan, 2);
            $interest = number_format($interest, 2);
            $amortization = number_format($amortization, 2);
        } else {
            $loan = DEFAULT_AMOUNT;
            $interest = DEFAULT_AMOUNT;
        }

        return view('welcome', ['loan' => $loan, 'interest' => $interest, 'amortization' => $amortization]);
    }

    return view('welcome', ['loan' => DEFAULT_AMOUNT, 'interest' => DEFAULT_AMOUNT, 'amortization' => DEFAULT_AMOUNT]);
});


