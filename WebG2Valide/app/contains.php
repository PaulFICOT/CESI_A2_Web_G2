<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contains extends Model
{
    //
    public $timestamps = false;
    protected $table = "containz";
    protected $fillable = [
        'Id_order',
        'Id_product',
    ];
    protected $primaryKey = [
        'Id_order',
        'Id_product',
    ];
}
?>