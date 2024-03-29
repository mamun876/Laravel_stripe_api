<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class OrderDetails extends Model
{
    protected $guarded=[

    ];
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
    use HasFactory;
}
