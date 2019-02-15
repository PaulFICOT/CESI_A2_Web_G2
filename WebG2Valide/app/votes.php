<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class votes extends Model
{
    //
    public $timestamps = false;
    protected $table = "votes";
    protected $fillable = [
        'Id_event',
        'Id_user',
    ];
    protected $primaryKey = [
        'Id_event',
        'Id_user',
    ];
}
?>