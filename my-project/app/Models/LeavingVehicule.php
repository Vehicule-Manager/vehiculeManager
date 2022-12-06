<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Vehicule;
use App\Client;

class LeavingVehicule extends Model
{
    use HasFactory;

    protected $table = 'leaving_vehicules';
    protected $fillable = ['leavingDate','renderDate','contract','id_clients','id_vehicules'];
}
