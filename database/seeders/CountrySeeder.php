<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('countries')->truncate();
		$json = File::get('database/data/countries.json');
		$data = json_decode($json);
        foreach($data as $obj){
			DB::table('countries')->insert([
				'id' => $obj->id,
                'code' => $obj->code,
                'name' => $obj->name,
                'continent' => $obj->continent,
                'region' => $obj->region,
                'surface_area' => $obj->surface_area,
                'indep_year' => $obj->indep_year,
                'population' => $obj->population,
                'life_expectancy' => $obj->life_expectancy,
                'gnp' => $obj->gnp,
                'gnp_old' => $obj->gnp_old,
                'local_name' => $obj->local_name,
                'government_form' => $obj->government_form,
                'head_of_state' => $obj->head_of_state,
                'capital' => $obj->capital,
                'code2' => $obj->code2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
			]);
    	}
    }
}