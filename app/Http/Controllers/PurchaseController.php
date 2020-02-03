<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Resources\PurchaseResource;
use App\Purchase;

class PurchaseController extends Controller
{
    public function index(){
        return PurchaseResource::collection(Purchase::all());
    }
}
