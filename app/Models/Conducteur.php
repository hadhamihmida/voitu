<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conducteur extends Authenticatable
{
    use   Notifiable;

    protected $guard = 'conducteur';


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date_naissance' => 'datetime',
       
    ];

    protected $fillable = [
        'nom',
        'email',
        'password',
        'date_naissance',
        'numero_telephone',
        'cin',
        'image',


    ];

    protected $hidden = [
        'password' , 'remember_token',
    ];
}
