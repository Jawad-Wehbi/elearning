<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Models\User;
use App\Models\Assignment;
use App\Models\Course;

class Announcement extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'announcements';
    protected $fillable = ['Announcement_title', 'Announcement_content'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
