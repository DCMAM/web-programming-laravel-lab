<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function showHomePage(){
        return view('home');
    }

    public function showFormPage(){
        $people = new People;


        return view('form', compact('people'));
    }

    public function insertData(Request $request){
        $people = new People;
        $people->id = $request->id;
        $people->name = $request->name;
        $people->major = $request->major;
        $people->gender = $request->gender;

        return view('form', compact('people'));
    }
}

