<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\SaleResource;
use App\Sale;

class SaleController extends Controller
{
    public function index(){
        return SaleResource::collection(Sale::all());
    }
}
