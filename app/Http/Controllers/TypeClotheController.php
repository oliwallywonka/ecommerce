<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Resources\TypeClotheResource;
use App\TypeClothe;

class TypeClotheController extends Controller
{
    public function index(){
        return TypeClotheResource::collection(TypeClothe::all());
    }

    public function store(Resquest $request){
        if($request->ajax()){
            try {
                $request->validate([
                    'type' => 'required|min:2'
                ]);
                $type_clothe = TypeClothe::create([
                    'type' => $request->type
                ]);
                return response()->json([
                    'message' => 'Tipo de ropa creada correctamente',
                    'id' => $type_clothe->id
                ]);
            } catch (ValidationException $e) {
                return response()->json($e->validate->errors());
            }
        }
        abort(401);
    }
    public function update (Resquest $request){
        if($request->ajax()){
            try {
                $request->validate([
                    'type' => 'required|min:2'
                ]);
                $type_clothe = TypeClothe::create([
                    'type' => $request->type
                ]);
                return response()->json([
                    'message' => 'Tipo de ropa creada correctamente',
                    'id' => $type_clothe->id
                ]);
            } catch (ValidationException $e) {
                return response()->json($e->validate->errors());
            }
        }
        abort(401);
    }
    public function activate(Request $request , TypeClothe $type_clothe){
        if($request->ajax()){

            try {

                $type_clothe->status = 1;
                $type_clothe->save();

                return response()->json(['message' => 'Tipo de ropa activada correctamente',
                                        'id' => $material->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function desactivate(Request $request , TypeClothe $type_clothe){
        if($request->ajax()){

            try {

                $type_clothe->status = 0;
                $type_clothe->save();

                return response()->json(['message' => 'Tipo de ropa desactivada correctamente',
                                        'id' => $type_clothe->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

}
