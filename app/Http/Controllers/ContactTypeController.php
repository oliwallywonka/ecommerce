<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Resources\ContactTypeResource;
use App\ContactType;

class ContactTypeController extends Controller
{
    public function index(){
        return ContactTypeResource::collection(ContactType::all());
    }

    public function store(Request $request){
        if($request->ajax()){
            try {
                $request->validate([
                    'contact_type' => 'required|alphanumeric'
                ]);

                $contact_type = ContactType::create([
                    'contact_type' => $request->contact_type
                ]);

                return response()->json([
                    'message' => 'Contacto creado correctamente',
                    'id' => $contact_type->id
                ]);
            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function update(Request $request,ContactType $contact_type){
        if($request->ajax()){
            try {
                $request->validate([
                    'contact_type' => 'required|alphanumeric'
                ]);

                $contact_type->update([
                    'contact_type' => $request->contact_type
                ]);

                return response()->json([
                    'message' => 'Contacto creado correctamente',
                    'id' => $contact_type->id
                ]);
            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function activate(Request $request , ContactType $contact_type){
        if($request->ajax()){

            try {

                $contact_type->status = 1;
                $contact_type->save();

                return response()->json(['message' => 'Contacto activado correctamente',
                                        'id' => $contact_type->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function desactivate(Request $request , ContactType $contact_type){
        if($request->ajax()){

            try {

                $contact_type->status = 0;
                $contact_type->save();

                return response()->json(['message' => 'Contacto desactivado correctamente',
                                        'id' => $contact_type->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }
}
