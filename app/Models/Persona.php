<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'ci',
        'nombre',
        'email',
        'fecha_nacimiento',
        'user_id',
    ];

    public function mascotas(){
        return $this->hasMany(Mascota::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
