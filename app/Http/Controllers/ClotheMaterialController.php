<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ClotheMaterial;
use App\Http\Resources\ClotheMaterialResource;
use Illuminate\Validation\ValidationException;

class ClotheMaterialController extends Controller
{
    public function index(){

        return ClotheMaterialResource::collection(ClotheMaterial::all());

    }

    public function store(Request $request){

        if($request->ajax()){

            try {
                $request->validate([
                    'material_id' => 'required|numeric',
                    'clothe_model_id' => 'required|numeric',
                    'porcent' => 'required|numeric'
                ]);

                $clothe_material = ClotheMaterial::create([
                    'material_id' => $request->material_id,
                    'clothe_model_id' => $request->clothe_model_id,
                    'porcent' => $request->porcent
                ]);

                return response()->json([
                    'message' => 'Agregado material a ropa correctamente',
                    'id' => $clothe_material->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }
        abort(401);
    }

    public function update(Request $request, ClotheMaterial $clothe_material){

        if($request->ajax()){

            try {
                $request->validate([
                    'material_id' => 'required|numeric',
                    'clothe_model_id' => 'required|numeric',
                    'porcent' => 'required|numeric'
                ]);

                $clothe_material->update([
                    'material_id' => $request->material_id,
                    'clothe_model_id' => $request->clothe_model_id,
                    'porcent' => $request->porcent
                ]);

                return response()->json([
                    'message' => 'Editado material a ropa correctamente',
                    'id' => $clothe_material->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }
        abort(401);
    }

    public function activate(Request $request , ClotheMaterial $clothe_material){
        if($request->ajax()){

            try {

                $clothe_material->status = 1;
                $clothe_material->save();

                return response()->json(['message' => 'Ropa activada correctamente',
                                        'id' => $clothe_material->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function desactivate(Request $request , ClotheMaterial $clothe_material){
        if($request->ajax()){

            try {

                $clothe_material->status = 0;
                $clothe_material->save();

                return response()->json(['message' => 'Ropa desactivada correctamente',
                                        'id' => $clothe_material->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }
}
