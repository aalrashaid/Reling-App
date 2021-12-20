<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        // 'visitor',
        // 'device',
        // 'uuid',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the Profiles associated with the user.
     */
    public function profiles()
    {
        return $this->hasOne(Profiles::class);
    }

    /**
     * Get the RequestPosts associated with the user.
     */
    public function RequestPosts()
    {
        return $this->hasOne(RequestPosts::class);
        
    }

     /**
     * Get the Lists associated with the user.
     */
    public function Lists()
    {
        return $this->hasOne(Lists::class);
    }

     /**
     * Get the WatchList associated with the user.
     */
    public function WatchList()
    {
        return $this->hasOne(WatchList::class);
    }
}
