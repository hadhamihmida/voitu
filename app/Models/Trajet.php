<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;
   
    protected $fillable=[
    
    'ville_depart' ,
    'ville_arriver',
    'heure_depart',
    'heure_arriver'];
}
