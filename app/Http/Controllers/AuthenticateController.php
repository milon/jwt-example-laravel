<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthenticateController extends Controller
{
    public function index()
    {
    	
    }

    public function authenticate(Request $request)
    {
    	try{
    		if(! $token = \JWTAuth::attempt($request->only('email', 'password'))){
    			return response()->json(['error' => 'Invalid Credential'], 401);
    		}
    	}
    	catch(\JWTException $e){
    		return response()->json(['error' => 'Could not create JWT token'], 500);
    	}

    	return response()->json(compact('token'));
    }
}
