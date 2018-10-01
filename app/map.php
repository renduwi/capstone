<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class map extends Model
{
    protected $table = 'gmaps_geocache';
    //PK
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = true;
}
