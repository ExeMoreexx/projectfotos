<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table="clients";
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellidos',
        'direccion',
        'telefono',
        'correo_electronico',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'created_at' => 'datetime:d-m-Y',
        'updated_at'=>'datetime:d-m-Y'
    ];
}
