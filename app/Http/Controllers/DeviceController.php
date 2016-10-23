<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Device;

class DeviceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('deviceadmin');
    }

    public function createPage()
    {
    	return view('device.create');
    }

    public function create(Request $r)
    {
    	$this->validate($r, [
    		'token' => 'required|string',
    		'vehicle_number' => 'required|string',
    	]);

    	Device::create($r->all());

    	return redirect('devices');
    
    }

    public function index()
    {
    	$devices = Device::orderBy('updated_at','desc')->get();

    	return view('device.index',compact('devices'));
    }

    public function updatePage(Device $device)
    {
    	return view('device.update', compact('device'));
    }

    public function update(Device $device,Request $r)
    {
    	$this->validate($r, [
    		'token' => 'required|string',
    		'vehicle_number' => 'required|string',
    	]);
    	
    	$device->update($r->all());

    	return redirect('devices');
    }

    public function delete(Device $device,Request $r)
    {
    	$device->delete();
    	return redirect('devices');
    }
}
