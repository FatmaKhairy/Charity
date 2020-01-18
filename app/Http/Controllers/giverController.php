<?php

namespace App\Http\Controllers;

use App\City;
use App\Governorate;
use Illuminate\Http\Request;

class giverController extends Controller
{
	public function index(){
			$governs=Governorate::with('cities')->get();

//			$govern_id=$governs[0]->id;
//
//			$city=$governs[0]->cities;
//			dd($city);
			$city=City::all();
		//	dd($governs[1]->cities);
	 	return view('giver',compact('governs'));
	}
}
