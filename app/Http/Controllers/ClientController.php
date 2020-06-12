<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();


        return view('clients.index', compact('clients'));
    }

    public function search(Request $request)
    {   
        $clients=Client::with('pets')->where('last_name', 'like', '%'.$request->search.'%')->orderBy('last_name', 'asc')->get();

        return view('clients.find', compact('clients'));
    }

    public function show($client_id)
    {   
        $client = Client::findOrFail($client_id);

        return view('clients.show', compact('client'));
    }

 public function create() {
        $client = new Client();
        return view('clients/edit', compact('client'));
    }
    public function store(Request $request) {
        $this->validate($request, [
            'first_name' =>'required|min:4',
            'last_name' =>'required|min:4',
            'email'=> 'required|email'
        ]);
        
        $client = new Client();
        $client->first_name = $request->input('first_name');
        $client->last_name = $request->input('last_name');
        $client->address = $request->input('address');
        $client->email = $request->input('email');
        $client->phone_number = $request->input('phone_number');
        $client->save();

        session()->flash('success_message','Successfully saved new client.');

        return redirect()->route('clients.edit', [$client->id]);
    }
    public function edit($client_id) {
        $client = Client::findOrFail($client_id);
        return view('clients/edit', compact('client'));

    }
    public function update(Request $request, $client_id) {
        $this->validate($request, [
            'first_name' =>'required|min:4',
            'last_name' =>'required|min:4',
            'email'=> 'required|email'


        ]);
        
        $client = Client::findOrFail($client_id);
        $client->first_name = $request->input('first_name');
        $client->last_name = $request->input('last_name');
        $client->address = $request->input('address');
        $client->email = $request->input('email');
        $client->phone_number = $request->input('phone_number');
        $client->save();

        session()->flash('success_message','Successfully saved a client.');

        return redirect()->route('clients.edit', [$client->id]);
    }


}
