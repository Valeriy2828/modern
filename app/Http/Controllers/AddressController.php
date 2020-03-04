<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Client;

class AddressController extends Controller
{
    public function addressGet(Request $request, $client = null){		
		
		//$address = Address::all();
		$clients = Client::all();
		$current_client = $client? Client::where('id', $client)->first(): null;
		if($current_client)
            $address = $current_client->addresses()->paginate(10);
        else
            $address = Address::where('id','>',1)->paginate(10);

        return view('addressAll',['address' => $address,'clients' => $clients ]);
                                                                            
    }
}
