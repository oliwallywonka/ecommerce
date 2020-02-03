<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Resources\WholeSellerResource;
use App\WholeSeller;

class WholesellerController extends Controller
{
    public function index(){
        return WholeSellerResource::collection(WholeSeller::all());
    }

    public function create(Request $request){
        if($request->ajax()){
            try {
                $request->validate([
                    'name' => 'required|alphanumeric',
                    'description' => 'alphanumeric',
                    'location' => 'required',
                    'latitude' => 'numeric',
                    'longitude' => 'numeric'
                ]);
                $wholeseller = Wholeseller::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'location' => $request->location,
                    'latitude' => $request->latitude,
                    'longitude' => $request->longitude
                ]);
            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }
        abort(401);
    }

    public function update(Request $request, Wholeseller $wholeseller){
        if($request->ajax()){
            try {
                $request->validate([
                    'name' => 'required|alphanumeric',
                    'description' => 'alphanumeric',
                    'location' => 'required',
                    'latitude' => 'numeric',
                    'longitude' => 'numeric'
                ]);
                $wholeseller->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'location' => $request->location,
                    'latitude' => $request->latitude,
                    'longitude' => $request->longitude
                ]);
            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }
        abort(401);
    }

}
