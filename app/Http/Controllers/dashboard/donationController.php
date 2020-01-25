<?php

namespace App\Http\Controllers\dashboard;

use App\Donation;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donationController extends Controller
{

    public function index()
    {
				$donations= Donation::all();
        return view('dashboard.donations',compact('donations'));
       //كل التببرعات
    }


//		public function cityName($cityID)
//		{
//				return DB::table('cities')->select('city_name')
//						->where('id',$cityID)->get();
//		}
//		public function govName($govID)
//		{
//				return DB::table('governorates')->select('governorate_name')
//						->where('id',$govID)->get();
//		}

    public function show(Donation $donation)
    {

    }

    public function edit(Donation $donation)
    {
        //
    }

    public function update(Request $request, Donation $donation)
    {
        //
    }

    public function destroy(Donation $donation)
    {
        //
    }
}
