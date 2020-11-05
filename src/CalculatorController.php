<?php

namespace Jaybits\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($a,$b){
        $result= $a + $b;
        try{
            return view('calculator::add',compact('result'));
        }
        catch(\InvalidArgumentException $ex) {
            echo $result;
        }
        return true;
    }

    public function subtract($a,$b){
        echo $a - $b;
    }
}
