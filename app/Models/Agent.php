<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = ['id_passport_no','full_name','biz_name','dob','join_date','role','title','scheme','nationality'];
}
