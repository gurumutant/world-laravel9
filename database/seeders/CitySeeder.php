<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->truncate();
		$json = File::get('database/data/cities.json');
		$data = json_decode($json);
        foreach($data as $obj){
			DB::table('cities')->insert([
				'id' => $obj->id,
				'name' => $obj->name,
				'country_id' => $obj->country_id,
				'district' => $obj->district,
				'population' => $obj->population,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
			]);
    	}
    }
}
