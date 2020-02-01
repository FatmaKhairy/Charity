<?php

use App\User;
use Illuminate\Database\Seeder;

class GovernoratesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $govs=['القاهره','الاسكندريه','الغربيه'];
    		foreach ($govs as $gov) {
						\App\Governorate::create([
								'governorate_name' => $gov,
						]);
				}

    }
}
