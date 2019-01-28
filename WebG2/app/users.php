<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends model {
    protected $fillable = ['User_mail','User_firstname','User_lastname','User_password'];
};