<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeaboxController extends Controller
{
    public function formulaire() 
    {
        return view('ideabox');
    }

    public function addIdea()
    {

        request()->validate([
            'Event_title' => [],
            'Event_description' => [],
            '' => [],
            '' => [],
            '' => [],
            '' => [],
            '' => [],
        ]);
        /*$idea = new App\idea;
        $idea->FirstName = request('FirstName');
        $idea->Name = request('Name');
        $idea->Email = request('Email');
        $idea->Title = request('Title');
        $idea->Location = request('Location');
        $idea->Cost = request('Cost');
        $idea->Body = request('Body');

        $utilisateur->save();*/
        
    }
}