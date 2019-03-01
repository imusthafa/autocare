<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
        protected $fillable = [
            'name',
            'description',
            'address',
            'lat',
            'lon',
            'location',
            'category',
            'userid',
            'rating'
        ];
    
        protected $hidden = [
             
        ];
}
