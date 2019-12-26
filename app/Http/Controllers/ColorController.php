<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\ColorResource;
use App\Color;
use Illuminate\Validation\ValidationException;

class ColorController extends Controller
{
    public function index(){
        return ColorResource::collection(Color::all());
    }

    public function store(Request $request){

        if($request->ajax()){
            try {
                $request->validate([
                    'color' => 'required|min:2'
                ]);

                $color = Color::create([
                    'color' => $request->color,
                ]);

                return response()->json([
                    'message' => 'Color creado correctamente',
                    'id' => $color->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

    }
}
