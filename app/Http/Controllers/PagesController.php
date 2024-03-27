<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function login()
    {
        return Inertia::render('Login');
    }

    public function validateUser (Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user); // Log in the user
            return redirect('/dashboard');
        } else {
            return back()->withInput()->withErrors(['email' => 'Email o password invalido']);
        }
    }

    public function dashboard ()
    {
        return Inertia::render('Dashboard');
    }

    public function test ()
    {
        $clients = Client::where('cliente', 'like', '%agua%')->limit(2)->get();
        return response()->json($clients);
    }
}
