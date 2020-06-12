<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function show()
    {
        
        $visit = Visit::findOrFail($visit_id);
    
        return view('visit.show', compact('visit'));
        
    }
}
