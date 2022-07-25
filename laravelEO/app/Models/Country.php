<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = "countries";

    # hasOneThrough

    public function cities(){
        return $this->hasOneThrough(
            City::class,
            State::class,
            'country_id',
            'state_id',
            'id',  // country id
            'id'   // state id
            // state.id = cities.id
        );
    }
}
