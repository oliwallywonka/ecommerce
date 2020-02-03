<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\ClotheResource;
use Illuminate\Validation\ValidationException;
use App\Clothe;

class ClotheController extends Controller
{
    public function showModel($clothe_model_id){

        return ClotheResource::collection(Clothe::all()->where('clothe_model_id',$clothe_model_id));

    }

   /* public function showCategory($clothe_category_id){

        return ClotheResource::collection(Clothe::all()->where('clothe_category_id',$clothe_category_id));

    }

    public function showColor($clothe_category_id){

        return ClotheResource::collection(Clothe::all()->with('model')->where('clothe_category_id',$clothe_category_id));

    }*/

    public function store(Request $request){

        if($request->ajax()){

            try {

                $request->validate([
                    'clothe_model_id' => 'required',
                    'color_id' => 'required',
                    'size_id' => 'required'
                ]);

                $clothe = Clothe::create([
                    'clothe_model_id' => $request->clothe_model_id,
                    'color_id' => $request->color_id,
                    'size_id' => $request->size_id
                ]);

                return response()->json(['message' => 'ropa creada correctamente',
                                        'id' => $clothe->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }

        }

        abort(404);

    }

    public function update(Request $request, Clothe $clothe){

        if($request->ajax()){
            try {

                $request->validate([
                    'clothe_model_id' => 'required|numeric',
                    'color_id' => 'required|numeric',
                    'size_id' => 'required|numeric'
                ]);

                $clothe->update([
                    'clothe_model_id' => $request->clothe_model_id,
                    'color_id' => $request->color_id,
                    'size_id' => $request->size_id
                ]);

                $clothe->save();

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        return response()->json(['message' => 'ropa creada correctamente',
                                        'id' => $clothe->id
                ]);

    }

    public function activate(Request $request , Clothe $clothe){
        if($request->ajax()){

            try {

                $clothe->status = 1;
                $clothe->save();

                return response()->json(['message' => 'Ropa activada correctamente',
                                        'id' => $clothe->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function desactivate(Request $request , Clothe $clothe){
        if($request->ajax()){

            try {

                $clothe->status = 0;
                $clothe->save();

                return response()->json(['message' => 'Ropa desactivada correctamente',
                                        'id' => $clothe->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

}
