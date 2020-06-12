<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class PetController extends Controller
{
    public function show($pet_id)
    {   
        $pet = Pet::with('visits')->findOrFail($pet_id);
        return view('pets.show', compact('pet'));
    }


    public function create() {
        $pet = new Pet();
        return view('pets/edit', compact('pet'));
    }
    public function store(Request $request) {
        $this->validate($request, [
            'name' =>'required',
            'breed' =>'required',
            'age' =>'required',
            'weight' =>'required',
        
        ]);
        
        $pet = new Pet();
        $pet->name = $request->input('name');
        $pet->breed = $request->input('breed');
        $pet->age = $request->input('age');
        $pet->weight = $request->input('weight');
        $pet->image = $request->input('image');
        $pet->client_id = $request->input('client_id');
        $pet->save();

        session()->flash('success_message','Successfully saved new pet.');

        return redirect()->route('pets.edit', [$pet->id]);
    }
    public function edit($pet_id) {
        $pet = Pet::findOrFail($pet_id);
        return view('pets/edit', compact('pet'));

    }
    public function update(Request $request, $pet_id) {
        $this->validate($request, [
            'name' =>'required',
            'breed' =>'required',
            'age' =>'required',
            'weight' =>'required',
        
        ]);
        
        $pet = new Pet();
        $pet->name = $request->input('name');
        $pet->breed = $request->input('breed');
        $pet->age = $request->input('age');
        $pet->weight = $request->input('weight');
        $pet->image = $request->input('image');
        $pet->client_id = $request->input('client_id');
        $pet->save();

        session()->flash('success_message','Successfully saved a pet.');

        return redirect()->route('pets.edit', [$pet->id]);
    }

}
