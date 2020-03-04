<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
     public function apiList(Request $request){		
		
		$user = Client::all();		
		
        return view('api.userslist',['user' => $user]);
                                                                            
    }
	
	public function showId(Request $request, $id){
          
        $userId = Client::where('id', $id)->select('email','password')->first();
        
        return view('api.show',['userId' => $userId]);
    	
    }
}
