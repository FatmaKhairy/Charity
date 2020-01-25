<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
   protected $fillable=[
   		'governorate_id','city_id','street_name'
	 ];
		public function cities()
		{
				return $this->belongsTo(Donation::class);
		}
}
