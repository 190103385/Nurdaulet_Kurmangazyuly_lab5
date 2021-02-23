<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function name($name) {
        return view('/name', ['name' => 'Nurdaulet']);
    }

    public function date($date) {
        return view('/date') -> with('date','01.09.2001');
    }

    public function age($age) {
        return view('/age',compact('age'));
    }
}
