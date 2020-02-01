<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class volunteer extends Model
{
    protected $fillable=[
    		'volunteer_id',
				'governorate_name',
				'city_name',
				'street_name'
		];
		public function user()
		{
				return $this->belongsTo(User::class);
		}
}
