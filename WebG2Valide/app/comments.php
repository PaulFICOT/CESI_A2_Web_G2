<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    //
    public $timestamps = false;
    protected $table = "comments";
    protected $fillable = [
        'Id_user',
        'Id_photo',
        'Comment_content',
    ];
    protected $primaryKey = [
        'Id_user',
        'Id_photo'
    ];
}
?>