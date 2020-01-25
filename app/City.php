<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class City extends Authenticatable
{
    use Notifiable;
		protected $guarded = [];

		public function governorate()
		{
				return $this->belongsTo(Governorate::class);
		}
		public function boxes()
		{
				return $this->hasMany(Box::class);
		}
		public function donations()
		{
				return $this->hasMany(Donation::class);
		}


}
