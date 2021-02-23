<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
	//Function for returning name with array
    public function name($name) {
        return view('/name', ['name' => 'Nurdaulet']);
    }

    //Function for returning date with "with"
    public function date($date) {
        return view('/date') -> with('date','01.09.2001');
    }

    //Function for returning age with compact
    public function age($age) {
        return view('/age',compact('age'));
    }
}
