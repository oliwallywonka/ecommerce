<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\MaterialResource;
use App\Material;


class MaterialController extends Controller
{
    public function index(){
        return MaterialResource::collection(Material::all());
    }
}
