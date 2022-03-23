<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowAComplaintRequestController extends Controller
{
    public function show()
    {
        $complaint_request = DB::select('select * from complaint_requests where id ');
        
        return view('voir_details_demande_reclamation'
         ,compact('complaint_request')
        );
        
    }
}
