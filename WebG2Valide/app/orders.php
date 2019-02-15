<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    //
    public $timestamps = false;
    protected $table = "orders";
    protected $fillable = [
        'Order_date',
        'Order_price',
        'Order_amount',
        'Id_user',
    ];
    protected $primaryKey = 'Id_orders';
}
?>