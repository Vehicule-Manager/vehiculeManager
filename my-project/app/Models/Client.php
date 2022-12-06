<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $fillable = ['civility', 'firstname', 'lastname', 'birthDate', 'address', 'optionalAddress', 'zipCode', 'city', 'id_users', 'id_creditInfos', 'created_at', 'updated_at'];
}
