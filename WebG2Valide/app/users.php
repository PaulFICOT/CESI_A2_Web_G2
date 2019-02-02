<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class users extends model implements Authenticatable
{
    
    use BasicAuthenticatable;
    
    public $timestamps = false;
    protected $fillable = [
        'User_mail',
        'User_firstname',
        'User_lastname',
        'password',
        'User_status',
        'User_isAdmin',
        'Id_center',
    ];
    protected $primaryKey = 'Id_user';

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