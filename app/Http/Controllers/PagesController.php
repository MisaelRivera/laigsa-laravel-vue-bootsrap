<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Client;
use Inertia\Inertia;
use App\Models\User;

class PagesController extends Controller
{
    //
    public function index ()
    {
        return Inertia::render('Index', ['title' => 'Testing']);
    }

    public function login()
    {
        return Inertia::render('Login');
    }

    public function validateUser (Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);
        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user); // Log in the user
            return redirect('/orders');
        } else {
            session()->flash('email', 'Credenciales equivocadas');
            return back();
        }
    }

    public function dashboard ()
    {
        return Inertia::render('Dashboard');
    }

    public function test ()
    {
        $search = request()->query('search');
        $clients = Client::where('cliente', 'like', "%$search%")->limit(10)->get();
        $clients = $clients->map(function ($client) {
            return $client->cliente;
        });
        return response()->json($clients);
    }
}
