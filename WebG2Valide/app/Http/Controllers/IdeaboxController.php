<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeaboxController extends Controller
{
    public function formulaire() {
        return view('ideabox');
    }

    public function traitement()

    request()->validate([
        
    ])
}