<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudOperations extends Model
{
    use HasFactory;
    protected $table = "crud_operations";

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact',
        'gender',
        'hobbies',
        'profile',
        'address',
        'country'
    ];

    public function setEmailAttribute($value){
        $this->attributes['email'] = Str::of($value)->trim()->lower();
    }

    public function setHobbiesAttribute($value){
        $this->attributes['hobbies'] = implode(',',$value);
    }

    // one to one relationship

    public function getCountry(){
        return $this->belongsTo(Country::class,'country','id');
    }

    public function getHobbiesAttribute($value)
    {
        return explode(',',$value);
    }
}
