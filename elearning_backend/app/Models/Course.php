<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = '';
    protected $fillable = [
        'course_title',
        'course_content',
        'instructorid',
        'studentid'
    ];
}
