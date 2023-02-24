<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Status;
use App\Client;
use App\GearBoxe;
use App\Brand;
use App\Energie;
use App\Type;

class Vehicule extends Model
{
    use HasFactory;

    protected $table = 'vehicules';
    protected $fillable = ['new','firstDateCicrulate','description','horsepower','price','enterDate','leavingDate',
        'immatriculation','id_statuses','id_clients','id_gear_boxes','id_brands','id_energies','id_types','id_model_car'];
}
