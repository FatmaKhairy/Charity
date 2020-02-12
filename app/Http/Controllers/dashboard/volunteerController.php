<?php

namespace App\Http\Controllers\dashboard;

use App\Donation;
use App\Http\Controllers\Controller;
use App\volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class volunteerController extends Controller
{
		public function index()
		{
				$user_id=auth()->user()->id;
				$volDons=DB::table('volunteers')
						->select('id','governorate_name','city_name','street_name','created_at')
						->where('volunteer_id',$user_id)->get();
				return view('dashboard.volunteerHome',compact('volDons'));
		}


    public function tackDonation(Request $request)
    {

				if ($request->ajax()){
						//send donation to volunteer table
						$volunteer=$request->user['id'];
						$gov=$request->donation['governorate_name'];
						$city=$request->donation['city_name'];
						$street=$request->donation['street_name'];

					  volunteer::create([
								'volunteer_id'=>$volunteer,
								'governorate_name'=>$gov,
								'city_name'=>$city,
								'street_name'=>$street,
						]);
				}

				Donation::find($request->donation['id'])->delete();//orDonation::where('id',$request->donation['id'])->delete();
				//return redirect()->route('dashboard.donations');
    }


    public function destroy(volunteer $volunteer)
    {
				 $volunteer->delete();
				 return redirect()->route('dashboard.volunteer.index');
    }
}
