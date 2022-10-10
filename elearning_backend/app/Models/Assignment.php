<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = '';
    protected $fillable = [
        'Assignment_title',
        'Assignment_content',
    ];
}
