<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
      "order_id",
      "user_id",
      "payment_id",
      "details",
    ];
}
