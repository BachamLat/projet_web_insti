<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShowAnEvaluationRequestController extends Controller
{
    public function show()
    {
        $evaluation_request = DB::select('select * from evaluation_requests where id');
        $profile = DB::select('select * from profils,evaluation_requests where profils.id = evaluation_requests.profil_id');
        $filiere = DB::select('select appelation from filieres,profils where profils.filiere_id = filieres.id');

        return view('voir_details_demande_evaluation'
         ,compact('evaluation_request','profile','filiere')
        );
        
    }
}


