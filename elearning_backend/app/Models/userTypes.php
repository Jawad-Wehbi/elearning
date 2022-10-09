<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class userTypes extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'userTypes';
    
    protected $fillable = [
        'userId','userType'
    ];
}