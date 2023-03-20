<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Vehicule;


class ModelCar extends Model
{
    use HasFactory;

    protected $table = 'model_car';
    protected $fillable = ['name', 'id_brands'];
}
