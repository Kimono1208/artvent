<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'status',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function cotizaciones()
    {
        return $this->hasMany(Cotizaciones::class, 'cliente_id');
    }

    public function eventos()
    {
        return $this->hasMany(Eventos::class, 'cliente_id');
    }

    public function trabajador()
    {
        return $this->hasOne(Trabajador::class);
    }
}