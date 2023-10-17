<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    public function purchaserdetails()
    {
        return $this->hasMany(purchaserdetails::class);
    }

    public function commissionregistration()
    {
        return $this->hasMany(commissionregistration::class);
    }
    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
