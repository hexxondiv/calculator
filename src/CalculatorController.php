<?php

namespace Jaybits\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($a,$b){
        if(!is_numeric($a)||!is_numeric($b)) {
            $result = "One of the parameters is not a number";
            return  $result;
        }
        else

        $result= $a + $b;
        try{
            return view('calculator::add',compact('result'));
        }
        catch(\InvalidArgumentException $ex) {
            return  $result;
        }
    }

    public function subtract($a,$b){
        if(is_nan($a)||is_nan($b))
            $result="One of the parameters is not a number";
        else

            echo $a - $b;
    }
}
