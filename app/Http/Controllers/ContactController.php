<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use Illuminate\Validation\ValidationException;
use App\ActivateDesactivate;
class ContactController extends Controller
{
    public function store(Request $request){
        if($request->ajax()){
            try {
                $request->validate([
                    'wholeseller_id' => 'required|numeric',
                    'contact_type_id' => 'required|numeric',
                    'data' => 'required|alphanumeric'
                ]);

                $contact = Contact::create([
                    'wholeseller_id' => $request->wholeseller_id,
                    'contact_type_id' => $request->contact_type_id,
                    'data' => $request->data
                ]);

                return response()->json([
                    'message' => 'contacto agregado a mayorista correctamente',
                    'id' => $contact->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function update(Request $request , Contact $contact){
        if($request->ajax()){
            try {
                $request->validate([
                    'wholeseller_id' => 'required|numeric',
                    'contact_type_id' => 'required|numeric',
                    'data' => 'required|alphanumeric'
                ]);

                $contact->update([
                    'wholeseller_id' => $request->wholeseller_id,
                    'contact_type_id' => $request->contact_type_id,
                    'data' => $request->data
                ]);

                return response()->json([
                    'message' => 'contacto editado a mayorista correctamente',
                    'id' => $contact->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function activate(Request $request , Contact $contact){
        if($request->ajax()){

            try {

                $contact->status = 1;
                $contact->save();

                return response()->json(['message' => 'Contacto activado correctamente',
                                        'id' => $contact->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function desactivate(Request $request , Contact $contact){
        if($request->ajax()){

            try {

                $contact->status = 0;
                $contact->save();

                return response()->json(['message' => 'Contacto desactivado correctamente',
                                        'id' => $contact->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }


}
