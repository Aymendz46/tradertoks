<?php

namespace App\Models;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Methodpay extends Model
{
    use HasFactory;

    public function payments() 
    {
        return $this->hasMany(Payment::class);
    }
}
