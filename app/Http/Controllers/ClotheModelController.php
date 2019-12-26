<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Resources\ClotheModelResource;
use App\ClotheModel;
use App\Brands;
use App\typeClothe;
use App\Category;
use App\ClotheMaterial;
use App\Material;
use App\ModelPicture;
use App\ModelOffert;

class ClotheModelController extends Controller
{
    public function index(){

        return ClotheModelResource::collection(ClotheModel::all());

    }

    public function store(Request $request){

        if($request->ajax()){
            try {
                $request->validate([
                    'category_id' => 'required|numeric',
                    'brand_id' => 'required|numeric',
                    'type_clothe_id' => 'required|numeric',
                    'ref_price' => 'required|between:0,1000.99',
                    'name' => 'required|unique:clothe_models',
                    'weight' => 'between:0,100000.99',
                    'gender' => 'required'
                ]);

                $clothe_model = ClotheModel::create([
                    'category_id' => $request->category_id,
                    'brand_id' => $request->brand_id,
                    'type_clothe_id' => $request->type_clothe_id,
                    'name' => $request->name,
                    'ref_price' => $request->ref_price,
                    'description' => $request->description,
                    'weight' => $request->weight,
                    'gender' => $request->gender,
                    'care_instructions' => $request->care_instructions
                ]);

                return response()->json(['message' => 'Modelo creado correctamente',
                                         'id' => $clothe_model->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

    }
}
