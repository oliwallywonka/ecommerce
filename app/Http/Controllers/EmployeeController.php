<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Resources\EmployeeResource;
use App\Employee;
use App\User;

class EmployeeController extends Controller
{
    public function index(){
        return EmployeeResource::collection(Employee::all());
    }

    public function store(Request $request){
        if($request->ajax()){
            try {

                $request->validate([
                    'name' => 'required|alphanumeric',
                    'email' => 'required|email|unique:users',
                    'password' => 'required',
                    'gender' => 'required',
                    'ci' => 'required|numeric'
                ]);

                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password
                ]);

                $employee = Employee::create([
                    'user_id' => $user->id,
                    'ci' => $request->ci,
                    'gender' => $request->gender
                ]);

                return response()->json([
                    'message' => 'Empleado registrado exitosamente',
                    'id' => $employee->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function update(Request $request,Employee $employee, User $user){
        if($request->ajax()){
            try {

                $request->validate([
                    'name' => 'required|alphanumeric',
                    'email' => 'required|email|unique:users',
                    'password' => 'required',
                    'gender' => 'required',
                    'ci' => 'required|numeric'
                ]);

                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password
                ]);

                $employee->update([
                    'user_id' => $user->id,
                    'ci' => $request->ci,
                    'gender' => $request->gender
                ]);

                return response()->json([
                    'message' => 'Empleado registrado exitosamente',
                    'id' => $employee->id
                ]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function activate(Request $request , Employee $employee,User $user){
        if($request->ajax()){

            try {

                $employee->status = 1;
                $employee->save();

                $user->status = 1;
                $user->save();

                return response()->json(['message' => 'Cuenta activada correctamente',
                                        'id' => $employee->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

    public function desactivate(Request $request , Employee $employee,User $user){
        if($request->ajax()){

            try {

                $employee->status = 0;
                $employee->save();

                $user->status = 0;
                $user->save();

                return response()->json(['message' => 'Cuenta desactivada correctamente',
                                        'id' => $employee->id]);

            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }

        abort(401);
    }

}
