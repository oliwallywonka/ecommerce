<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\ClotheResource;
use App\Clothe;

class ClotheController extends Controller
{
    public function show($clothe_model_id){

        return ClotheResource::collection(Clothe::all()->where('clothe_model_id',$clothe_model_id));

    }
}
