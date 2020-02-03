<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Resources\PurchaseDetailResource;
use App\PurchaseDetail;
class PurchaseDetailController extends Controller
{
    public function show($purchase_id){

        return  PurchaseDetailResource::collection(PurchaseDetail::where('purchase_id',$purchase_id)->get());

    }
}
