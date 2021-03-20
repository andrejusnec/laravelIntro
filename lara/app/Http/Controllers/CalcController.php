<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function mainPage() {
        return 'Welcome to Main page of calculator';
    }
    public function welcome() {
        return view('layout.welc');
    }
    public function sum($action, $num1, $num2) {
        if($action == 'sum') {
            $summa = $num1 + $num2;
            return view('calculator.calc', compact('summa'));
        } else if($action == 'minus') {
            $summa = $num1 - $num2;
            return view('calculator.calc', compact('summa'));
        } else if($action == 'multiply') {
            $summa = $num1 * $num2;
            return view('calculator.calc', compact('summa'));
        } else if($action == 'divide') {
            $summa = $num1 / $num2;
            return view('calculator.calc', compact('summa'));
        } else {
            $summa = 'Invalid value';
            return view('calculator.calc', compact('summa'));
        }
    }
}
