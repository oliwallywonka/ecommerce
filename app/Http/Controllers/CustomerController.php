<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Resources\CustomerResource;
use App\Customer;
use App\User;

class CustomerController extends Controller
{
    public function index(){
        return CustomerResource::collection(Customer::all());
    }

    public function store(Request $request){
        if($request->ajax()){
            try {

                $request->validate([
                    'name' => 'required|alphanumeric',
                    'email' => 'required|email|unique:users',
                    'password' => 'required',
                    'street' => 'alphanumeric',
                    'door_number' => 'numeric'
                ]);

                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password
                ]);

                $customer = Customer::create([
                    'user_id' => $user->id,
                    'street' => $request->street,
                    'door_number' => $request->door_number
                ]);

                return response()->json([
                    'message' => 'Creado exitosamente',
                    'id' => $customer->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function update(Request $request,Customer $customer,User $user){
        if($request->ajax()){
            try {

                $request->validate([
                    'name' => 'required|alphanumeric',
                    'email' => 'required|email|unique:users',
                    'password' => 'required',
                    'street' => 'alphanumeric',
                    'door_number' => 'numeric'
                ]);

                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password
                ]);

                $customer->update([
                    'street' => $request->street,
                    'door_number' => $request->door_number
                ]);

                return response()->json([
                    'message' => 'Creado exitosamente',
                    'id' => $customer->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function activate(Request $request , Customer $customer){
        if($request->ajax()){

            try {

                $customer->status = 1;
                $customer->save();

                return response()->json(['message' => 'Cuenta activada correctamente',
                                        'id' => $customer->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function desactivate(Request $request , Customer $customer){
        if($request->ajax()){

            try {

                $customer->status = 0;
                $customer->save();

                return response()->json(['message' => 'Cuenta desactivada correctamente',
                                        'id' => $customer->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }
}
