<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\CategoryResource;

use App\Category;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    public function index(){

        return CategoryResource::collection(Category::all());

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
}
