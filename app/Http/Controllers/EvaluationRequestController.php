<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class EvaluationRequestController extends Controller
{
    public function show()
    {
        $acad_sems = DB::select('select designation from academic_semesters');
        $ues = DB::select('select appelation from u_e_s');
        $eva_types = DB::select('select appelation from evaluation_types');

        return view('faire_demande_evaluation'
         ,compact('acad_sems','ues','eva_types')
        );
        
    }

    public function createEvaluationRequest()
    {
        $evaluation_request = new EvaluationRequest;
        echo('Demande Créée avec succès');
        
    }
}
