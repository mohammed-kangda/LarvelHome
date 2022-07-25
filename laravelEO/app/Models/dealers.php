<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dealers extends Model
{
    use HasFactory;
    public function brands(){
        return $this->belongsTo(brands::class);
    }

    public function belongsToManyBrands(){
       return $this->belongsToMany(brands::class,'brands_dealers');
    }
}
