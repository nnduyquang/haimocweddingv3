<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [

        'name','path','image_pc', 'image_mobile','is_active','order','created_at','updated_at'

    ];
}
