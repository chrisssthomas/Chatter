<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Traits\Likeable;

class Tweet extends Model
{
    use HasFactory, Likeable;

    protected $fillable = ['image', 'user_id', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageAttribute($value): string
    {   
        if ($value) {
            return asset($value);
        }

        return false;
    }

}
