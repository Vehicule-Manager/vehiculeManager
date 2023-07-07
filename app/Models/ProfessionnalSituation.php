<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionnalSituation extends Model
{
    use HasFactory;

    protected $table = 'professionnal_situations';

    protected $fillable = ['name'];
}
