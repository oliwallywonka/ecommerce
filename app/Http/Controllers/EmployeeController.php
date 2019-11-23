<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\EmployeeResource;
use App\Employee;

class EmployeeController extends Controller
{
    public function index(){
        return EmployeeResource::collection(Employee::all());
    }
}
