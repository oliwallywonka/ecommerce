<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ModelPicture;
use Illuminate\Validation\ValidationException;

class ModelPictureController extends Controller
{
    public function store(Request $request){
        if($request->ajax()){

            try {

                $request->validate([

                    'clothe_model_id' => 'required',
                    'picture'=> 'required|image'

                ]);


                $file = $request->file('picture')->getClientOriginalName();
                $image = $request->file('picture')->storeAs('img/clothesModels',$file);

                $model_picture = ModelPicture::create([
                    'picture' => $file,
                    'clothe_model_id' => $request->clothe_model_id

                ]);

                return response()->json(['message'=> 'Fotografia creada correctamente',
                                         'id' => $model_picture->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }

        }
    }
}
