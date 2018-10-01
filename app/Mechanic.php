<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    private $table = 'service_request';
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}


