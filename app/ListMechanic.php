<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListMechanic extends Model
{
       //table name
       protected $table = 'users';
       //PK
       public $primaryKey = 'Mid';
       //Timestamp
       public $timestamps = true;
       
}
