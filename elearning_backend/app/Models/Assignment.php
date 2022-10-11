<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Assignment extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'assignments';
    protected $fillable = [
        'Assignment_title',
        'Assignment_content'
    ];
}
