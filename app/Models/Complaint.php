<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    public $table = 'complaint';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
