<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Models\User;
use App\Models\Assignment;
use App\Models\Announcement;

class Course extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'courses';
    protected $fillable = ['course_title', 'course_content'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
