<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{

    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function scopeSearch($query, $value)
    {
        return $query->where(function ($q) use ($value) {
            $q->where('title', 'like', "%{$value}%")
                ->orWhere('body', 'like', "%{$value}%");
        });
    }

    public function scopeUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function scopeFromDate($query, $date)
    {
        return $query->whereDate('created_at', '>=', $date);
    }

    public function scopeToDate($query, $date)
    {
        return $query->whereDate('created_at', '<=', $date);
    }

    public function scopeSort($query, $value)
    {
        if ($value === 'oldest') {
            return $query->oldest();
        }

        return $query->latest();
    }
}
