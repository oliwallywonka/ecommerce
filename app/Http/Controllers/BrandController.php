<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;

class BrandController extends Controller
{
    public function index(){
        $brand = Brand::all();

        return [

            'brand'=>$brand

        ];
    }
}
