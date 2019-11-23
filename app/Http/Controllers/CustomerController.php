<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\CustomerResource;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
        return CustomerResource::collection(Customer::all());
    }
}
