<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class Usuarios extends Model
{
    use HasFactory, HasRoles;

	protected $guard_name = 'web';


    protected $table = "users";

    protected $fillable = [
    	'name',
    	'email',
    	'password',
    	'rol',
    	'foto',
    	'documento'
    ];
}
