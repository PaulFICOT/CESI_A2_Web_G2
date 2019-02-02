<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class likes extends Model
{
    //
    public $timestamps = false;
    protected $table = "likes";
    protected $fillable = [
        'Id_photo',
        'Id_user',
    ];
    protected $primaryKey = [
        'Id_photo',
        'Id_user',
    ];
}
?>