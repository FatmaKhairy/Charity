<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class City extends Authenticatable
{
    use Notifiable;
		protected $guarded = [];
		public function governorate()
		{
				return $this->belongsTo(Governorate::class);
		}

}
