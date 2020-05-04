<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    public $timestamps = false;
    protected $rememberTokenName = false;

    public static $login_validation_rule = [
        'email' => 'required',
        'password' => 'required'
    ];
}
