<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Resources\TravelPurchaseResource;
use App\Travel;

class TravelController extends Controller
{
    public function index(){
        return TravelPurchaseResource::collection(Travel::all());
    }

    public function store(Request $request){
        if($request->ajax()){
            try {
                $request->validate([
                    'destiny' => 'required|min:4|alpha',
                    'food_cost' => 'numeric',
                    'ticket_cost' => 'numeric',
                    'others' => 'numeric',
                    'description' => 'alphanumeric'
                ]);

                $travel = Travel::create([
                    'destiny' => $request->destiny,
                    'food_cost' => $request->food_cost,
                    'ticket_cost' => $request->ticket_cost,
                    'others' => $request->others,
                    'description' => $request->description
                ]);

                return response()->json([
                    'message' => 'Viaje creado exitosamente',
                    'id' => $travel->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }
        abort(401);
    }

    public function update(Request $request,Travel $travel){
        if($request->ajax()){
            try {
                $request->validate([
                    'destiny' => 'required|min:4|alpha',
                    'food_cost' => 'numeric',
                    'ticket_cost' => 'numeric',
                    'others' => 'numeric',
                    'description' => 'alphanumeric'
                ]);

                $travel->update([
                    'destiny' => $request->destiny,
                    'food_cost' => $request->food_cost,
                    'ticket_cost' => $request->ticket_cost,
                    'others' => $request->others,
                    'description' => $request->description
                ]);

                return response()->json([
                    'message' => 'Viaje editado exitosamente',
                    'id' => $travel->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }
        abort(401);
    }

    public function activate(Request $request, Travel $travel){
        if($request->ajax()){

            try {

                $travel->status = 1;
                $travel->save();

                return response()->json(['message' => 'Imagen activada correctamente',
                                        'id' => $travel->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function desactivate(Request $request, Travel $travel){
        if($request->ajax()){

            try {

                $travel->status = 0;
                $travel->save();

                return response()->json(['message' => 'Imagen desactivada correctamente',
                                        'id' => $travel->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }
}
