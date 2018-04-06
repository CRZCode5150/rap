<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConnectionOrFavorite extends Model
{
    protected $table = 'connections_or_favorites';

    public function senderInfo()
    {
        return $this->hasOne('App\User', 'id', 'sender');
    }

    public function receiverInfo()
    {
        return $this->hasOne('App\User', 'id', 'receiver');
    }
}
