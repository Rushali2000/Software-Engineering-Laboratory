<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer_posts extends Model
{
    public $table = 'volunteer_posts';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
