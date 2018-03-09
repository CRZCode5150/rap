<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConnectionOrFavorite extends Model
{
    protected $table = 'connections_or_favorites';

    public function sender()
    {
        return $this->hasOne('App\User', 'id', 'sender');
    }

    public function receiver()
    {
        return $this->hasOne('App\User', 'id', 'receiver');
    }
}
