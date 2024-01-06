<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Helpers\helpers;
use App\Models\Setting;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    
    public function create()
    {
        $information = metadataInformation();
        return view('auth.register', compact('information'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::min(8)],
            'country' => 'required',
            'agreement' => 'required',
        ]);
    }




}
