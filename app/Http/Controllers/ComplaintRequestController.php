<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ComplaintRequestController extends Controller
{
    public function show()
    {
        $ues = DB::select('select appelation from u_e_s');
        $eva_type = DB::select('select appelation from evaluation_types');
        $acad_sem = DB::select('select designation from academic_semesters');

        return view('faire_demande_reclamation', compact('ues','eva_type','acad_sem'));
        
    }

}