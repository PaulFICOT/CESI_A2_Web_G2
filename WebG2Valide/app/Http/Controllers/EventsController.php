<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controllers{

    public function updateEvents(Request $request)
    {
        $data = $request->all();

        dd($data);
    }
}
?>