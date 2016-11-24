<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Usage;
use App\User;
use App\Device;

class UsageController extends Controller
{
    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
    	$usages = Usage::where('user_id',$user->user_id);
    	return $usages;
    }

    public function entry(Device $device, Request $request)
    {
    	$request->user_id = Usaer::where('rfid_card_number',$request->user_id)->first();
    	$request->device_id = $device->id;
    	if($request->token != $device->token){
    		return "failed";
    	}
    	$this->validate($request,
    			'latitude' => 'required|numeric',
    			'longitude' => 'required|numeric',
    			'usage' => 'required|numeric',
    			'user_id' => 'required',
    			'device_id' => 'required',
    			'quality' => 'required|numeric',
    		);

    	Usage::create($request->all());

    	return "OK";
    }
}
