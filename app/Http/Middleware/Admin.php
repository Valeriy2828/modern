<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Client;

class Admin{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){   
		$userRoles = Client::select('client_type')->get();
			foreach($userRoles as $role){
				if ($userRoles->client_type == 1){
					return $next($request);
				}
			}
		return redirect('/');		
    }
}
