<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;

use App\Http\Resources\BrandResource;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index(){
        $brand = Brand::where('status',true)->paginate(1);

        return [

            'brand'=>$brand

        ];
    }

    public function store(Request $request){
        if($request->ajax()){

            try {
                $request->validate([
                    'brand' => 'required|min:2|unique:brands'

                ]);

                if($request->hasFile('picture')){
                    $file = $request->file('picture')->getClientOriginalName();
                    $image = $request->file('picture')->storeAs('img/brands',$file);

                    $brand = Brand::create([
                        'brand' => $request->brand,
                        'picture' =>'img/brads'.$file
                    ]);
                }else{
                    $brand = Brand::create([
                        'brand' => $request->brand,
                        'picture' => null
                    ]);
                }



                return response()->json(['message' => 'Marca Creada correctamente',
                                        'id' => $brand->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }


        }

        abort(401);
    }

    public function update(Request $request,Brand $brand){
        if($request->ajax()){

            try {
                $request->validate([
                    'brand' => 'required|min:2'
                ]);

                    if($request->hasFile('picture')){
                        Storage::delete('brands/'.$brand->picture);
                        $file = $request->file('picture')->getClientOriginalName();
                        $image = $request->file('picture')->storeAs('img/brands',$file);

                        $brand->update([
                            'brand' => $request->brand,
                            'picture' => $file
                        ]);
                    }else{
                        $brand->update([
                            'brand' => $request->brand,
                        ]);
                    }



                    return response()->json(['message' => 'Marca editada correctamente',
                                            'id' => $brand->id
                                            ]);



            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }

        }

        abort(401);
    }

    public function activate(Request $request,$id){
        if($request->ajax()){

            try {

                $brand = Brand::findOrFail($id);

                $brand->status = 1;

                $brand->save();


                return response()->json(['message' => 'Marca activada correctamente',
                                            'id' => $brand->id
                                            ]);


            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }


        }

        abort(401);
    }

    public function desactivate(Request $request,$id){
        if($request->ajax()){

            try {

                $brand = Brand::findOrFail($id);

                $brand->status = 0;

                $brand->save();



                return response()->json(['message' => 'Marca desactivada correctamente',
                                            'id' => $brand->id
                                            ]);


            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }


        }

        abort(401);
    }
}
