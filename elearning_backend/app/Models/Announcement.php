<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = '';
    protected $fillable = [
        'Announcement_title',
        'Announcement_content',
    ];
}
