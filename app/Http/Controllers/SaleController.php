<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Resources\SaleResource;
use App\Sale;

class SaleController extends Controller
{
    public function index(){
        return SaleResource::collection(Sale::all());
    }
}
