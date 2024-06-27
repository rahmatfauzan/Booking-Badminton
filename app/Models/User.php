<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\FilamentUser;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'telepon',
        'username'
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // /**
    //  * Role constants
    //  */
    // const ROLE_ADMINISTRATOR = 'admin';

    // /**
    //  * Determine if the user can access Filament.
    //  *
    //  * @return bool
    //  */
    // public function canAccessFilament(): bool
    // {
    //     return $this->role === self::ROLE_ADMINISTRATOR;
    // }


    /**
     * Role constants
     */
    const ROLE_ADMINISTRATOR = 'admin';

    /**
     * Determine if the user can access Filament.
     *
     * @return bool
     */
    public function canAccessFilament(): bool
    {
        return $this->role === self::ROLE_ADMINISTRATOR;
    }

    /**
     * Get the user's name for Filament.
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->name ?? 'Default Name';
    }
}
