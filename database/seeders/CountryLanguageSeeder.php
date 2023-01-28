<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CountryLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country_languages')->truncate();
		$json = File::get('database/data/country_languages.json');
		$data = json_decode($json);
        foreach($data as $obj){
			DB::table('country_languages')->insert([
				'id' => $obj->id,
				'country_id' => $obj->country_id,
                'language' => $obj->language,
				'is_official' => $obj->is_official,
				'percentage' => $obj->percentage,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
			]);
    	}
    }
}
