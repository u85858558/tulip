<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function test()
    {
        $array = ['number1' => 1,'number2' =>  2, 'number3' => 3];
        return json_encode($array);
    }

    //
}
