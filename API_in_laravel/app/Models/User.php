<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class User extends Model
{
    use HasApiTokens;
    protected $table = "users";
    protected $fillable = [
        "name",
        "email",
        "city",
        "country",
        "address",
        "zip_code",
        "phone",
        "gender",
        "age",
        "salary",
    ];
}
