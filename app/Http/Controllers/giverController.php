<?php

namespace App\Http\Controllers;

use App\Box;
use App\City;
use App\Governorate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class giverController extends Controller
{
			public function index(){
					$governs=Governorate::with('cities')->get();
           $cities=City::all();
						//			$govern_id=$governs[0]->id; //	$city=$governs[0]->cities;// dd($city);
					return view('giver',compact('governs','cities'));
			}

			public function showBoxes(Request $request)
			{

				//SELECT * FROM `boxes` WHERE `city_id` = 1
        //$x= DB::table('boxes')->where('city_id',$request->city_id)->get();
					if ($request->ajax()){
							$boxes =DB::table('boxes')->where('city_id',$request->city_id)->get();
							return response()->json($boxes);
					}
			}

}
