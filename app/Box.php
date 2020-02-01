<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Box extends Model
{
		use Notifiable;
		protected $guarded = [];

		public function governorate()
		{
				return $this->belongsTo(Governorate::class);
		}
		public function city()
		{
				return $this->belongsTo(City::class);
		}
}
