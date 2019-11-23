<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\SaleDetailResource;
use App\SaleDetail;

class SaleDetailController extends Controller
{
    public function show($sale_id){
        return SaleDetailResource::collection(SaleDetail::where('sale_id',$sale_id)->get());
    }
}
