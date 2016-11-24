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
    		'area_id' => 'numeric|exists:areas,id',
    		'age' => 'required',
    		'family_id' => 'required|numeric|exists:familys,id',
    		'criteria_id' => 'numeric|exists:criterias,id',
    		'adharcard_number' => 'required',
    		'mobile_number' => 'required', 
            'rfid_card_number' => 'required',
    	]);

        $request->password = bcrypt($request->password);

    	$user = User::create($r->all());
        auth()->login($user);

        return redirect('/home');

    }
}
