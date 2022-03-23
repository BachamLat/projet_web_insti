<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShowAllEvaluationRequestsController extends Controller
{
    public function show()
    {
        $evaluation_requests = DB::select('select profil_id,evaluation_type_id,created_at from evaluation_requests');
        
        return view('voir_liste_demandes_evaluation'
         ,compact('evaluation_requests')
        );
        
    }
}


