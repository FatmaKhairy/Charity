<?php

use Illuminate\Database\Seeder;

class BoxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				DB::table('boxes')->insert([
						"governorate_id" =>1,
						'city_id'        =>1,
						'street_name'    =>'المعادي شارع 45 امام حديقه الزهور ',
				]);
				DB::table('boxes')->insert([
						"governorate_id" =>2,
						'city_id'        =>3,
						'street_name'    =>'شارع صفيه زغلول بجوار عصير مكه',
				]);
				DB::table('boxes')->insert([
						"governorate_id" =>3,
						'city_id'        =>6,
						'street_name'    =>'امام جامع السيد البدوي ',
				]);
    }
}
