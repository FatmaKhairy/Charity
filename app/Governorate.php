<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Governorate extends Authenticatable
{
    use Notifiable;
		protected $guarded = [];
		//protected $fillable=['govern_name'];
		public function cities()
		{
				return $this->hasMany(City::class);
		}
}
