<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;

use App\Http\Resources\BrandResource;
use Illuminate\Validation\ValidationException;

class BrandController extends Controller
{
    public function index(){
        $brand = Brand::all();

        return [

            'brand'=>$brand

        ];
    }

    public function store(Request $request){
        if($request->ajax()){

            try {
                $request->validate([
                    'brand' => 'required|min:2|unique:brands'

                ]);

                if($request->hasFile('picture')){
                    $file = $request->file('picture')->getClientOriginalName();
                    $image = $request->file('picture')->storeAs('img/brands',$file);

                    $brand = Brand::create([
                        'brand' => $request->brand,
                        'picture' => $file
                    ]);
                }else{
                    $brand = Brand::create([
                        'brand' => $request->brand,
                        'picture' => null
                    ]);
                }



                return response()->json(['message' => 'Marca Creada correctamente',
                                        'id' => $brand->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }


        }

        abort(401);
    }
}
