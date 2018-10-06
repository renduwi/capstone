<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListVehicle extends Model
{
    
    //table name
    protected $table = 'list_vehicle';
    //PK
    public $primaryKey = 'Veid';
    //Timestamp
    public $timestamps = true;

    public $fillable = [
        'name',
        'Veid',
        'platenum',
        'color',
        'brand',
        'model'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
