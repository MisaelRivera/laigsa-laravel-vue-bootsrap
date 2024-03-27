<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Inertia\Inertia;

class PagesController extends Controller
{
    //
    public function index ()
    {
        return Inertia::render('Index', ['title' => 'Testing']);
    }

    public function getClients ($query)
    {
        $clients = Client::where('cliente', 'like', "%$query%")->limit(10)->get();
        $clients = $clients->map(function ($client) {
            return $client->cliente;
        });
        return response()->json($clients);
    }

    public function test ()
    {
        $clients = Client::where('cliente', 'like', '%agua%')->limit(2)->get();
        return response()->json($clients);
    }
}
