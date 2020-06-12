<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;

class VisitController extends Controller
{
    public function show($visit_id)
    {
        
        $visit = Visit::with('pet')->with('client')->findOrFail($visit_id);
    
        return view('visits.show', compact('visit'));
        
    }

    public function create() {
        $visit = new Visit();
        return view('visits/edit', compact('visit'));
    }
    public function store(Request $request) {
        $this->validate($request, [
            'client_id' =>'required|integer',
            'pet_id' =>'required|integer',
            'report' =>'required',      
        ]);
        
        $visit = new Visit();
        $visit->client_id = $request->input('client_id');
        $visit->pet_id = $request->input('pet_id');
        $visit->report = $request->input('report');
        $visit->save();

        session()->flash('success_message','Successfully saved new visit.');

        return redirect()->route('visits.edit', [$visit->id]);
    }
    public function edit($visit_id) {
        $visit = Visit::findOrFail($visit_id);
        return view('visits/edit', compact('visit'));

    }
    public function update(Request $request, $visit_id) {
        $this->validate($request, [
            'client_id' =>'required|integer',
            'pet_id' =>'required|integer',
            'report' =>'required',      
        ]);
        
        $visit = new Visit();
        $visit->client_id = $request->input('client_id');
        $visit->pet_id = $request->input('pet_id');
        $visit->report = $request->input('report');
        $visit->save();

        session()->flash('success_message','Successfully saved a visit.');

        return redirect()->route('visits.edit', [$visit->id]);
    }
}
