<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputeController extends Controller
{
    public function index(){
        return view('compute.calculate');
    }

    public function compute(Request $request){
        //dd($request);    
        $firstNumber = $request->input('firstnumber');
        //dd($request);
        $secondNumber = $request->input('secondnumber');
        $sum = $this->sumOfNumbers($firstNumber, $secondNumber);
        return $sum;
    } 

    public function sumOfNumbers($firstNumber, $secondNumber){
        return $firstNumber + $secondNumber;
       
    }
}
