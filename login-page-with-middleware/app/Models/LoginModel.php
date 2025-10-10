<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table = 'register_users';
    protected $fillable = ['name','email', 'password'];
    public $timestamps = false;
    public $softDeletes = true;

    
}
