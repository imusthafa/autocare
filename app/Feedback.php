<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
        protected $fillable = [
            'name',
            'email',
            'message'
        ];
    
        protected $hidden = [
             
        ];
}
