<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class centers extends Model
{
    //
    public $timestamps = false;
    protected $table = "centers";
    protected $fillable = [
        'Center_name',
    ];
    protected $primaryKey = 'Id_center';
}
?>