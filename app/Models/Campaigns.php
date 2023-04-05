<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaigns extends Model
{
    public $table = 'campaign';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
