<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\ModelOffertResource;
use App\ModelOffert;

class ModelOffertController extends Controller
{
    public function show($clothe_model_id){
        return ModelOffertResource::collection(ModelOffert::where('clothe_model_id',$clothe_model_id)->get());
    }
}
