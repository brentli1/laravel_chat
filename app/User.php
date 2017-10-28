<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Conversation;
use App\Message;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * undocumented function summary
     *
     * @return type
     **/
    public function conversations()
    {
        return $this->belongsToMany('App\Conversation');
    }

    /**
     * undocumented function summary
     *
     * @return type
     **/
    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
