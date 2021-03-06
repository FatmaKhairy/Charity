<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Donation extends Model
{
   protected $fillable=[
   		'governorate_name','city_name','street_name','phone','hour'
	 ];
		public function cities()
		{
				return $this->belongsTo(Donation::class);
		}
		public function cityName()
		{
				return DB::table('cities')->select('city_name')
						->where('id',$this->city_id)->get();
		}
		public function govName()
		{
				return DB::table('governorates')->select('governorate_name')
						->where('id',$this->governorate_id)->get();
		}
}
