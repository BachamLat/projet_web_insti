<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicSemesterController extends Controller
{
    public function create(Request $request)
    {
        $request->validate(
            [
              "email"=>"requiert|email" ,
              "firstname"=> "requiert|"
            ]
            );
         ;
        $request.get("") input()

        return view("dgfdf", ["name"=> "Nandjirh"]);
    }
}
