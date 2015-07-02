<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthenticateController extends Controller
{
    public function authenticatedUser()
    {
    	try {
	        if (! $user = JWTAuth::parseToken()->authenticate()) {
	            return response()->json(['error' => 'User not found.'], 404);
	    	}
	    } catch (TokenExpiredException $e) {
	        return response()->json(['error' => 'Token expired.'], $e->getStatusCode());
	    } catch (TokenInvalidException $e) {
	        return response()->json(['error' => 'Invalid token.'], $e->getStatusCode());
	    } catch (JWTException $e) {
	        return response()->json(['error' => 'Token absent.'], $e->getStatusCode());
	    }

	    return response()->json(compact('user'));
    }

    public function authenticate(Request $request)
    {
    	try{
    		if(! $token = JWTAuth::attempt($request->only('email', 'password'))){
    			return response()->json(['error' => 'Invalid Credential.'], 401);
    		}
    	} catch(JWTException $e){
    		return response()->json(['error' => 'Could not create JWT token.'], 500);
    	}

    	return response()->json(compact('token'));
    }
}
