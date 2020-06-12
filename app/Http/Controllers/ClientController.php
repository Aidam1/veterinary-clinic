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
        $clients=Client::where('last_name', 'like', '%'.$request->search.'%')->orderBy('last_name', 'asc')->get();

        return view('clients.find', compact('clients'));
    }


    public function show($client_id)
    {   
        $client = Client::findOrFail($client_id);

        return view('clients.show', compact('client'));
    }
}
