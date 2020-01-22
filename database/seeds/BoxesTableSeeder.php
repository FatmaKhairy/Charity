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
						'city_id'        =>3,
						'street_name'    =>'المعادي امام حديقه الزهور45 ',
				]);
				DB::table('boxes')->insert([
						"governorate_id" =>2,
						'city_id'        =>3,
						'street_name'    =>'بجوار مدينه زويل ',
				]);
				DB::table('boxes')->insert([
						"governorate_id" =>3,
						'city_id'        =>18,
						'street_name'    =>'المندره النبوي المهندس بجانب مسجد الفرج ',
				]);
    }
}
