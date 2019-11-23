<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\TypeClotheResource;
use App\TypeClothe;

class TypeClotheController extends Controller
{
    public function index(){
        return TypeClotheResource::collection(TypeClothe::all());
    }
}
