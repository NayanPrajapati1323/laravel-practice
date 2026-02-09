<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table = 'students';

    public function dummy()
    {
        return "Hello World";
    }
}
