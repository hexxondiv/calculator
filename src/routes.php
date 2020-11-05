<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 11/5/20
 * Time: 3:41 PM
 */

use Illuminate\Support\Facades\Route;

Route::get('calculator',function (){
    echo "Hellow from Calculator!";
});
Route::get('add/{a}/{b}','Jaybits\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}','Jaybits\Calculator\CalculatorController@subtract');