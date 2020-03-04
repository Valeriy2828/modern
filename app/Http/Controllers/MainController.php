<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Address;
use DB;

class MainController extends Controller{

     public function index(Request $request){		
		
		$clients = Client::all();		
		
        return view('index',['clients' => $clients]);
                                                                            
    }
	
	public function show(Request $request, $id)
    {
        $clientId = Client::where('id', $id)->first();
        
        return view('clientAddress',['clientId' => $clientId]);
    }
	
	public function storeAddress(Request $request){

        $validatedData = $request->validate([
			'city' => 'required',
			'postcode' => 'required|integer',
            'region' => 'required',
			'street' => 'required'
        ]);


        $address = new Address([
            'client_id' => $request->input('client_id'),
            'city' => $request->input('city'),
            'postcode' => $request->input('postcode'),
            'region' => $request->input('region'),
            'street' => $request->input('street')
            
        ]);

        $addressAdd = $address->save();

        return back()->with('success', 'Адрес добавлен!!!');
		
    }
	
	public function addressDestroy($id){
        Address::find($id)->delete();
        return back()->with('success', 'Адрес удален!!!');		
    }
}
