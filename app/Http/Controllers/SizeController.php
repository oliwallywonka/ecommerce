<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Resources\SizeResource;
use App\Size;


class SizeController extends Controller
{
    public function index(){
        return SizeResource::collection(Size::all());
    }

    public function store(Request $request){

        if($request->ajax()){
            try {
                $request->validate([
                    'size' => 'required|min:1'
                ]);
                $size = Size::create([
                    'size' => $request->size
                ]);
                return response()->json([
                    'message' => 'Talla creada correctamente',
                    'id' => $size->id
                ]);
            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }
        abort(401);
    }

    public function update(Request $request, Size $size){

        if($request->ajax()){
            try {
                $request->validate([
                    'size' => 'required|min:1'
                ]);
                $size->update([
                    'size' => $request->size
                ]);
                return response()->json([
                    'message' => 'Talla editada correctamente',
                    'id' => $size->id
                ]);
            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }
        abort(401);
    }

    public function activate(Request $request, Size $size){
        if($request->ajax()){

            try {

                $size->status = 1;
                $size->save();

                return response()->json(['message' => 'Imagen activada correctamente',
                                        'id' => $size->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function desactivate(Request $request, Size $size){
        if($request->ajax()){

            try {

                $size->status = 0;
                $size->save();

                return response()->json(['message' => 'Imagen desactivada correctamente',
                                        'id' => $size->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }
}
