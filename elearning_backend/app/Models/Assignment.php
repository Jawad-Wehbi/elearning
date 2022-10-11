<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Models\User;
use App\Models\Course;
use App\Models\Announcement;

class Assignment extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'assignments';
    protected $fillable = ['Assignment_title', 'Assignment_content'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
