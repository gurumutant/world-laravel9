<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function cities() {
        return $this->hasMany(City::class);
    }

    public function citiesCount() {
        return $this->hasOne(City::class)
            ->selectRaw('country_id, count(*) as jml')
            ->groupBy('country_id');
    }
 
    public function getCitiesCountAttribute() {
        // if relation is not loaded already, let's do it first
        if (!array_key_exists('citiesCount', $this->relations)) 
        $this->load('citiesCount');
 
        $related = $this->getRelation('citiesCount');
 
        // then return the count directly
        return ($related) ? (int) $related->jml : 0;
    }
}
