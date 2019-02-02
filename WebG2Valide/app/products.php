<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
    public $timestamps = false;
    protected $table = "products";
    protected $fillable = [
        'Product_name',
        'Product_price',
        'Product_decription',
        'Product_nbr_sold',
        'Product_photo',
        'Id_category',
    ];
    protected $primaryKey = 'Id_product';
}
?>