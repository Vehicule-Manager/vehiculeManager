<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculeByClient extends Model
{
    use HasFactory;

    protected $table = 'vehicules_by_clients';

    protected $fillable = ['id_vehicules', 'id_clients'];
}
