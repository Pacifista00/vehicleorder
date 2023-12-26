<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
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
}
