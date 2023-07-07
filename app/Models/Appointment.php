<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected  $table = 'appointments';

    protected  $fillable = ['date_and_hour','description','id_employees','id_clients','id_subjects'];
}
