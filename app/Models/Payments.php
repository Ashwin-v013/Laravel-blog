<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{

    use HasFactory;

    protected $fillable = [
        'payment_id', 'user_id' , 'amount'
    ];



    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
