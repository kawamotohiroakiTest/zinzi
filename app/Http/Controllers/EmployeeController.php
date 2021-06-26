<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $view = view('employee.index');
        $view->employee = \App\Employee::get('name');
        return $view;
    }
}
