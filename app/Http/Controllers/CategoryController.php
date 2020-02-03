<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\CategoryResource;

use App\Category;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    public function index(){

        return CategoryResource::collection(Category::all()->where('status',true));

    }

    public function store(Request $request){

        if ($request->ajax()){

            try {

                $request->validate([
                    'category' => 'required|min:2|unique:categories'
                ]);

                $category = Category::create([
                    'category' => $request->category
                ]);

                return response()->json(['message' => 'Categoria creada correctamente',
                                         'id' => $category->id
                ]);


            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }

        }

        abort(401);

    }

    public function update(Request $request ,$id){
        if($request->ajax()){

            try {
                $request->validate([
                    'category' => 'required|min:2'
                ]);

                $category = Category::findOrFail($id);

                    return response()->json(['message' => 'Categoria editada correctamente',
                                            'id' => $category->id
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

                $category = Category::findOrFail($id);

                $category->status = 1;

                $category->save();


                return response()->json(['message' => 'Categoria activada correctamente',
                                            'id' => $category->id
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

                $category = Category::findOrFail($id);

                $category->status = 0;

                $category->save();



                return response()->json(['message' => 'Categoria desactivada correctamente',
                                            'id' => $category->id
                                            ]);


            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }


        }

        abort(401);
    }
}
