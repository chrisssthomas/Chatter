<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;
    use Likeable;

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
