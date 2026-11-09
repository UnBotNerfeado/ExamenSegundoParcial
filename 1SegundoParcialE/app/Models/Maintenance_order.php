<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance_ordes extends Model
{
    /** @use HasFactory<\Database\Factories\MaintenanceOrdesFactory> */
    use HasFactory;
    public function machine()
{
    return $this->belongsTo(Machine::class);
}
}
