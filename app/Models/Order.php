<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'driver','region_id','vehicle_id','bbm','status_id'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
