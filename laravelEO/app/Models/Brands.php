<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    public function dealers(){

        // return $this->hasOne(dealers::class);

        return $this->hasMany(dealers::class);
    }

    public function belongsToManyDealers(){
        return $this->belongsToMany(dealers::class,'brands_dealers');
    }
}
