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

    public function update(Request $request, ClothePicture $clothe_picture){

        if($request->ajax()){
            try {

                $request->validate([
                    'clothe_id' => 'required|numeric',
                    'picture' => 'required|image',

                ]);
                Storage::delete('clothe_picture/'.$clothe_picture->picture);
                $file = $request->file('picture')->getClientOriginalName();
                $image = $request->file('picture')->storeAs('img/clothes',$file);

                $clothe_picture->update([
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
    public function activate(Request $request , ClothePicture $clothe_picture){
        if($request->ajax()){

            try {

                $clothe_picture->status = 1;
                $clothe_picture->save();

                return response()->json(['message' => 'Imagen activada correctamente',
                                        'id' => $clothe_picture->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function desactivate(Request $request , ClothePicture $clothe_picture){
        if($request->ajax()){

            try {

                $clothe_picture->status = 0;
                $clothe_picture->save();

                return response()->json(['message' => 'Imagen desactivada correctamente',
                                        'id' => $clothe_picture->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }
}
