<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;

class Student extends Model
{
    use HasFactory;
    // db name used
    protected $connection = 'mysql';
    protected $table = 'students';
    protected $primaryKey = 'id';

    public $timestamps = false; // prevent created_at, updated_at
    // public $incrementing = false;  // if pK is string
    // protected $keyType = 'string';
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updation_date';

    // extra secure feature to know model that we have this fields
    protected $fillable = ['id','Name','Age','Date'];

    // assin def values to attributes
    // protected $attributes = [
    //     'car_type' => 'sedan'
    // ];
}
