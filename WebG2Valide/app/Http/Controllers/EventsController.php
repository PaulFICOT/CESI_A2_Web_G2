<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller{

    public function formulaire()
    {
        return view('Events');
    }
}
?>