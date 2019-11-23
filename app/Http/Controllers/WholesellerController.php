<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\WholeSellerResource;
use App\WholeSeller;

class WholesellerController extends Controller
{
    public function index(){
        return WholeSellerResource::collection(WholeSeller::all());
    }
}
