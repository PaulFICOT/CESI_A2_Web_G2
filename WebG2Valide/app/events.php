<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    //
    public $timestamps = false;
    protected $table = "eventz";
    protected $fillable = [
        'Event_title',
        'Event_description',
        'Event_approval',
        'Event_date',
        'Event_recurrence',
        'Event_price',
        'Event_period',
        'Event_location',
        'Id_user',
    ];
    protected $primaryKey = 'Id_event';
}
?>