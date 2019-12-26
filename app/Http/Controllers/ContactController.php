<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use Illuminate\Validation\ValidationException;
class ContactController extends Controller
{
    public function store(Request $request){
        if($request->ajax()){
            try {
                $request->validate([
                    'wholeseller_id' => 'required|numeric',
                    'contact_type_id' => 'required|numeric',
                    
                ]);
            } catch (ValidationException $e) {
            }
        }
    }
}
