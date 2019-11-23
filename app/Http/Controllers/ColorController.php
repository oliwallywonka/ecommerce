<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\ColorResource;
use App\Color;

class ColorController extends Controller
{
    public function index(){
        return ColorResource::collection(Color::all());
    }
}
