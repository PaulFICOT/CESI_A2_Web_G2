<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    //
    public $timestamps = false;
    protected $table = "photos";
    protected $fillable = [
        'Photo_name',
        'Photo_is_public',
        'Id_event',
    ];
    protected $primaryKey = 'Id_photos';
}
?>