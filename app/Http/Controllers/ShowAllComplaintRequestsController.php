<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowAllComplaintRequestsController extends Controller
{
    public function show()
    {
        $complaint_requests = DB::select('select profil_id,evaluation_type_id,created_at from complaint_requests');
        
        return view('voir_liste_demandes_reclamation'
         ,compact('complaint_requests')
        );
        
    }
}
