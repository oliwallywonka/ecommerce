<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ModelPicture;
use App\ClotheModel;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;

class ModelPictureController extends Controller
{
    public function store(Request $request,ClotheModel $clothe_model){
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
        abort(401);
    }

    public function update(Request $request){
        if($request->ajax()){

            try {

                $request->validate([

                    'clothe_model_id' => 'required',
                    'picture'=> 'required|image'

                ]);
                if($request->hasFile('picture')){
                    Storage::delete('brands/'.$brand->picture);
                    $file = $request->file('picture')->getClientOriginalName();
                    $image = $request->file('picture')->storeAs('img/clothesModels',$file);

                    $model_picture = ModelPicture::create([
                        'picture' => $file,
                        'clothe_model_id' => $request->clothe_model_id

                    ]);
                }else{
                    $model_picture = ModelPicture::create([
                        'clothe_model_id' => $request->clothe_model_id
                    ]);
                }

                return response()->json(['message'=> 'Fotografia creada correctamente',
                                         'id' => $model_picture->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }

        }
        abort(401);
    }

    public function activate(Request $request, ModelPicture $model_picture){
        if($request->ajax()){

            try {

                $model_picture->status = 1;
                $model_picture->save();

                return response()->json(['message' => 'Imagen activada correctamente',
                                        'id' => $model_picture->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function desactivate(Request $request, ModelPicture $model_picture){
        if($request->ajax()){

            try {

                $model_picture->status = 0;
                $model_picture->save();

                return response()->json(['message' => 'Imagen desactivada correctamente',
                                        'id' => $model_picture->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }
}
