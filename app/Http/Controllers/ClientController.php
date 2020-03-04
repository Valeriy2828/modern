<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    	
	public function store(Request $request){

        $validatedData = $request->validate([
			'firstname' => 'required|max:100',
			'lastname' => 'required|max:100',
            'email' => 'required|email|unique:clients|max:255',
			'password' => 'required'
        ]);


        $client = new Client([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'client_type' => $request->input('client_type'),
            'password' => Hash::make($request->input('password')),
        ]);

        $clientAdd = $client->save();

        return back()->with('success', 'Пользователь добавлен!!!');
		
    }
	
	public function clientAdd(Request $request){		
		     
        return view('clientAdd');                                         
    }
		
}
