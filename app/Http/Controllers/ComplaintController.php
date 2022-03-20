<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function show()
    {
        return view('voir_details_demande_evaluation');
    }

    public function create()
    {
        return view('faire_demande_evaluation');
    }

    public function create_demande(Request $request)
    {
        
    }
}
