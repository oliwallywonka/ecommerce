<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Resources\ModelOffertResource;
use App\ModelOffert;

class ModelOffertController extends Controller
{
    public function show($clothe_model_id){
        return ModelOffertResource::collection(ModelOffert::where('clothe_model_id',$clothe_model_id)->get());
    }

    public function store(Request $request,ClotheModel $clothe_model){
        if($request->ajax()){
            try {

                $request->validate([
                    'offert_porcent' => 'required|numeric',
                    'offert_days' => 'required|numeric'
                ]);

                $model_offert = ModelOffert::create([
                    'clothe_model_id' => $clothe_model->id,
                    'offert_porcent' => $request->offert_porcent,
                    'offert_days' => $request->offert_days
                ]);

                return response()->json([
                    'message' => 'Oferta registrada exitosamente',
                    'id' => $model_offert->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function update(Request $request,ClotheModel $clothe_model){
        if($request->ajax()){
            try {

                $request->validate([
                    'offert_porcent' => 'required|numeric',
                    'offert_days' => 'required|numeric'
                ]);

                $model_offert->update([
                    'clothe_model_id' => $clothe_model->id,
                    'offert_porcent' => $request->offert_porcent,
                    'offert_days' => $request->offert_days
                ]);

                return response()->json([
                    'message' => 'Oferta registrada exitosamente',
                    'id' => $model_offert->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function activate(Request $request ,ModelOffert $model_offert){
        if($request->ajax()){

            try {

                $model_offert->status = 1;
                $model_offert->save();

                return response()->json(['message' => 'Oferta activada correctamente',
                                        'id' => $model_offert->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function desactivate(Request $request,ModelOffert $model_offert){
        if($request->ajax()){

            try {

                $model_offert->status = 0;
                $model_offert->save();

                return response()->json(['message' => 'Oferta desactivada correctamente',
                                        'id' => $model_offert->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }
}
