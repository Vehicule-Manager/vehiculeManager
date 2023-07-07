<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeavingVehicule extends Model
{
    use HasFactory;

    protected $table = 'leaving_vehicules';

    protected $fillable = ['leavingDate', 'renderDate', 'id_statuses', 'id_clients', 'id_vehicules'];
}
