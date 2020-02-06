<?php

namespace App\Http\Controllers;

use App\Box;
use App\City;
use App\Donation;
use App\Governorate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class giverController extends Controller
{
			public function index(){
					$governs=Governorate::with('cities')->get();
						//$govern_id=$governs[0]->id; //	$city=$governs[0]->cities;// dd($city);
					return view('giver',compact('governs'));
			}

			public function showBoxes(Request $request)
			{
				   //SELECT * FROM `boxes` WHERE `city_id` = 1 ==>بترجع اوبجكت كامل
					//SELECT `street_name` FROM `boxes` WHERE `city_id`=1 ==>برجع خانه واحده
        //$x= DB::table('boxes')->where('city_id',$request->city_id)->get();
					if ($request->ajax()){
							$boxes =DB::table('boxes')->select('street_name')
									->where('city_id',$request->city_id)->get();
							return response()->json($boxes);
					}
			}

			public function donation(Request $request){

					$request->validate([
							'governorate_name' => 'required',
              'city_name'        => 'required',
              'street_name'      => 'required',
							'phone'            =>'required',
							'hour'             =>'required'
					]);
					$data=$request->all();

					$gov= DB::table('governorates')->select('governorate_name')
						->where('id',$request->governorate_name)->get();
					$govName=array_values(data_get($gov,'*.governorate_name'));
					$gov_name=$govName[0];

				  $city= DB::table('cities')->select('city_name')
						->where('id',$request->city_name)->get();
					$cityName=array_values(data_get($city,'*.city_name'));
           $city_name=$cityName[0];

          $data['governorate_name']=$gov_name;
          $data['city_name']=$city_name;

					$d=Donation::create($data);

					return redirect('/');
			}

}
