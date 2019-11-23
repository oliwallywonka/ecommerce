<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\SizeResource;
use App\Size;

class SizeController extends Controller
{
    public function index(){
        return SizeResource::collection(Size::all());
    }
}
