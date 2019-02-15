<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    //
    public $timestamps = false;
    protected $table = "categories";
    protected $fillable = [
        'Category_type',
    ];
    protected $primaryKey = 'Id_category';
}

?>