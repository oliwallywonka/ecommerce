<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ClothePicture;
use Illuminate\Validation\ValidationException;



class ClothePictureController extends Controller
{
    public function store(Request $request){

        if($request->ajax()){
            try {

                $request->validate([
                    'clothe_id' => 'required|numeric',
                    'picture' => 'required|image',

                ]);

                $file = $request->file('picture')->getClientOriginalName();
                $image = $request->file('picture')->storeAs('img/clothes',$file);

                $clothe_picture = ClothePicture::create([
                    'clothe_id' => $request->clothe_id,
                    'picture' => $file,
                ]);

                return response()->json([
                    'message' => 'Fotografia creada correctamente',
                    'id' => $clothe_picture->id
                ]);
            } catch (ValidationException $e) {

                return response()->json($e->validator->errors());

            }
        }

    }
}
