<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class users extends model implements Authenticatable
{
    
    use BasicAuthenticatable;
    
    protected $fillable = ['User_mail','User_firstname','User_lastname','password'];

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }
};