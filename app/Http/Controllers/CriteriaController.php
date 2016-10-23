<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Criteria;
use App\Area;

class CriteriaController extends Controller
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
    	$areasCol = Area::select('id','name')->get();
    	$areas = $areasCol->pluck('name','id');
    	return view('criteria.create', compact('areas'));
    }

    public function create(Request $r)
    {
    	$this->validate($r, [
    		'gender' => 'required|in:MALE,FEMALE,OTHER',
    		'age_max' => 'required|numeric',
    		'family_income_max' => 'required|numeric',
    		'area_id'=> 'required|numeric|exists:areas,id',
    		'daily_allowence'=> 'required|numeric',
    		'monthly_allowence'=> 'required|numeric',
    		 
    	]);

    	Criteria::create($r->all());

    	return redirect('criterias');
    
    }

    public function index()
    {
    	$criterias = Criteria::orderBy('updated_at','desc')->get();

    	return view('criteria.index',compact('criterias'));
    }

    public function updatePage(Criteria $criteria)
    {
    	$areasCol = Area::select('id','name')->get();
    	$areas = $areasCol->pluck('name','id');
    	
    	return view('criteria.update', compact('criteria','areas'));
    }

    public function update(Criteria $criteria,Request $r)
    {
    	$this->validate($r, [
    		'gender' => 'required|in:MALE,FEMALE,OTHER',
    		'age_max' => 'required|numeric',
    		'family_income_max' => 'required|numeric',
    		'area_id'=> 'required|numeric|exists:areas,id',
    		'daily_allowence'=> 'required|numeric',
    		'monthly_allowence'=> 'required|numeric',
    		 
    	]);

    	$criteria->update($r->all());

    	return redirect('criterias');
    }

    public function delete(Criteria $criteria,Request $r)
    {
    	$criteria->delete();
    	return redirect('criterias');
    }
}
