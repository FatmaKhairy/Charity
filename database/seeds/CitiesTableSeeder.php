<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
						\App\City::create([
								'governorate_id' => 1,
								'city_name'=>'المعادي'
						]);
						\App\City::create([
								'governorate_id' => 1,
								'city_name'=>'شبرا'
						]);
						\App\City::create([
								'governorate_id' => 2,
								'city_name'=>'محرم بيك'
						]);
						\App\City::create([
								'governorate_id' => 2,
								'city_name'=>'المنشيه'
						]);
						\App\City::create([
								'governorate_id' => 3,
								'city_name'=>'كفر الزيات '
						]);
						\App\City::create([
								'governorate_id' => 3,
								'city_name'=>'طنطا'
						]);
    }
}
