<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Conversation;
use App\User;

class Message extends Model
{
    /**
     * undocumented function summary
     *
     * @return type
     **/
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * undocumented function summary
     *
     * @return type
     **/
    public function conversation()
    {
        return $this->belongsTo('App\Conversation');
    }
}
