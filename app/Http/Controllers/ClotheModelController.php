<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\ClotheModelResource;
use App\ClotheModel;

class ClotheModelController extends Controller
{
    public function index(){

        return ClotheModelResource::collection(ClotheModel::all());

    }
}
