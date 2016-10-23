<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Area;
use App\Criteria;
use App\Family;

class CustomRegistrationController extends Controller
{
    public function showRegistrationForm()
    {
    	return view('auth.register');
    }

    public function register(Request $r)
    {
    	$this->validate($r, [
    		'name' => 'required|string',
    		'email' => 'required|email',
    		'password' => 'required',
    		'repassword' => 'required|same:password',
    		'type' => 'required',
    		'latitude' => 'required',
    		'longitude'=> 'required',
    		'area_id' => 'numeric',
    		'age' => 'required',
    		'family_id' => 'required|numeric',
    		'criteria_id' => 'numeric',
    		'adharcard_number' => 'required',
    		'mobile_number' => 'required', 
    	]);

    	User::create($r->all());
    }
}
