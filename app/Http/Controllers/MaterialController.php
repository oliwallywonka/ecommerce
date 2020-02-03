<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Resources\MaterialResource;
use App\Material;


class MaterialController extends Controller
{
    public function index(){
        return MaterialResource::collection(Material::all());
    }

    public function store(Request $request){
        if($request->ajax()){
            try {

                $request->validate([
                    'material' => 'required|min:2'
                ]);

                $material = Material::create([
                    'material' => $request->material
                ]);

                return response()->json([
                    'message' => 'Material registrado exitosamente',
                    'id' => $material->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function update(Request $request,Material $material){
        if($request->ajax()){
            try {

                $request->validate([
                    'material' => 'required|min:2'
                ]);

                $material->update([
                    'material' => $request->material
                ]);

                return response()->json([
                    'message' => 'Material registrado exitosamente',
                    'id' => $material->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function activate(Request $request , Material $material){
        if($request->ajax()){

            try {

                $material->status = 1;
                $material->save();

                return response()->json(['message' => 'Material activada correctamente',
                                        'id' => $material->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function desactivate(Request $request , Material $material){
        if($request->ajax()){

            try {

                $material->status = 0;
                $material->save();

                return response()->json(['message' => 'Material desactivada correctamente',
                                        'id' => $material->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }
}
