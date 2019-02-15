<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sign_in extends Model
{
    //
    public $timestamps = false;
    protected $table = "sign_in";
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