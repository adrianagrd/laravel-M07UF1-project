<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producte extends Model
{
    protected $table = 'Productes';

    protected $fillable = ['nom', 'descripcio', 'preu', 'stock','imatge'];
    use HasFactory;
}
