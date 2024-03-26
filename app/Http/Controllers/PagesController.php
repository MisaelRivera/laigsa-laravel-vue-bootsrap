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
        $clients = Client::where('cliente', 'LIKE', "'%Jacy%'")->get();
        return response()->json($clients);
    }
}
