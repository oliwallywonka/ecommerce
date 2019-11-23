<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\ContactTypeResource;
use App\ContactType;

class ContactTypeController extends Controller
{
    public function index(){
        return ContactTypeResource::collection(ContactType::all());
    }
}
