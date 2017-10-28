<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Message;

class Conversation extends Model
{
    /**
     * undocumented function summary
     *
     * @return type
     **/
    public function users()
    {
        return $this->belongsToMany('App\User');
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
}
