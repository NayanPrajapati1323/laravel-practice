<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
    ];

    public function getNameAttribute($value)
    {
        return strtolower($value);
    }
    public function getPhoneAttribute($value)
    {
        return "+91-" . $value;
    }

    public function getAddressAttribute($value)
    {
        return strtoupper($value);
    }

    //mutetors
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    //upercase
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }

}
