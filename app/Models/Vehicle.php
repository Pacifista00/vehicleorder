<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function History()
    {
        return $this->belongsTo(Order::class);
    }
    public function serviceSchedule()
    {
        return $this->hasOne(ServiceSchedule::class);
    }
}
