<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\TravelPurchaseResource;
use App\Travel;

class TravelController extends Controller
{
    public function index(){
        return TravelPurchaseResource::collection(Travel::all());
    }
}
