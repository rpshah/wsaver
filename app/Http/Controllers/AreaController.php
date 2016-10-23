<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Area;

class AreaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('areaadmin');
    }

    public function createPage()
    {
    	return view('area.create');
    }

    public function create(Request $r)
    {
    	$this->validate($r, [
    		'name' => 'required|string|unique:areas,name',
    		'latitude_min' => 'required|numeric',
    		'latitude_max' => 'required|numeric',
    		'longitude_min'=> 'required|numeric',
    		'longitude_max'=> 'required|numeric',
    		 
    	]);

    	Area::create($r->all());

    	return redirect('areas');
    
    }

    public function index()
    {
    	$areas = Area::all();

    	return view('area.index',compact('areas'));
    }

}
