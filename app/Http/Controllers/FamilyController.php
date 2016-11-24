<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Family;

class FamilyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('familyadmin');
    }

    public function createPage()
    {
    	return view('family.create');
    }

    public function create(Request $r)
    {
    	$this->validate($r, [
    		'family_income' => 'required|numeric',
    	]);

    	Family::create($r->all());

    	return redirect('families');
    
    }

    public function index()
    {
    	$families = Family::orderBy('updated_at','desc')->get();

    	return view('family.index',compact('families'));
    }

    public function updatePage(Family $family)
    {
    	return view('family.update', compact('family'));
    }

    public function update(Family $family,Request $r)
    {
    	$this->validate($r, [
    		'family_income' => 'required|numeric',
    	]);
    	
    	$family->update($r->all());

    	return redirect('families');
    }

    public function delete(Family $family,Request $r)
    {
    	$family->delete();
    	return redirect('families');
    }
}
