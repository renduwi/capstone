<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ServiceReq extends Model
{
    use Notifiable;

     //table name
     protected $table = 'service_request';
     //PK
     public $primaryKey = 'Sid';
     //Timestamp
     public $timestamps = true;
 
     public function user()
     {
         return $this->belongsTo('App\User');
     }
     
    public function mechanic()
    {
        return $this->belongsTo('App\ServiceReq');
    }
}
