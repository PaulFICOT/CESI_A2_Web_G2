<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\votes;
use App\users;
use App\sign_in;
use App\events;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IdeaboxController extends Controller
{
    public function formulaire() 
    {
        return view('ideabox');
    }

    public function addIdea()
    {

        /* Validation du formulaire */
        request()->validate([
            'Event_title' => ['required', 'unique:events,Event_title'],
            'Event_description' => ['required'],
            'Event_location' => ['required'],
            'Event_price' => ['required', 'regex:/^[0-9]+(\.[0-9]{1,2})?$/'],
        ]);

        $idea = events::create([
            'Event_title' => request('Event_title'),
            'Event_description' => request('Event_description'),
            'Event_approval' => 0,
            'Event_reccurence' => 0,
            'Event_period' => null,
            'Event_location' => request('Event_location'),
            'Event_price' => request('Event_price'),
            'Id_user' => session()->get('Id_user'),
        ]);
        
        return flash("Vous devez être connecté pour voir cette page.");
    }
}