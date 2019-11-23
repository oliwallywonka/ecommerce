<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\ClotheResource;
use App\Clothe;

class ClotheController extends Controller
{
    public function show($clothe_models_id){

        return ClotheResource::collection(Clothe::all()->where('clothe_models_id',$clothe_models_id));

    }
}
