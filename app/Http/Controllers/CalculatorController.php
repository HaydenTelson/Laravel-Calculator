<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Switch_;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Date;

class CalculatorController extends Controller
{
    public function calculate(Request $request)
    {
        //Get the input from the request
        $operator = $request->input('operators');
        $firstNumber = $request->input('firstNumber');
        $secondNumber = $request->input('secondNumber');
        $result = 0;

        //Calculate based on the selected operator
        switch($operator)
        {
            case "Add":
                $result = $firstNumber + $secondNumber;
                $operator = '+';
                break;
            case "Subtract":
                $result = $firstNumber - $secondNumber;
                $operator = '-';
                break;
            case "Multiply":
                $result = $firstNumber * $secondNumber;
                $operator = '*';
                break;
            case "Divide":
                $operator = '/';

                //Divide by zero check
                if($secondNumber == 0)
                {
                    $result = 'Divide by Zero';
                }
                else
                {
                    $result = $firstNumber / $secondNumber;
                }
                break;
        }

        //Insert the new calculation into the table
        DB::insert('insert into calculations (firstNumber, operator, secondNumber, result, created_at) values (?, ?, ?, ?, ?)', [$firstNumber, $operator, $secondNumber, $result, new DateTime]);

        //Return the results to display on the home page
        return redirect('/')->with('answer', 'Answer: '.$result);
    }

    public function populateHistory()
    {
        //Get the last 10 records using create dateTime
        $resultHistory = DB::select('select * from calculations order by created_at desc limit 10');
        return view('calculator', ['resultHistory' => $resultHistory]);
    }
}
