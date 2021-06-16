<?php


namespace App\Traits;

use App\Models\User;

trait Followable
{

    public function following(User $user)
    {
        return $this->follows()
            ->where('following_user_id', $user->id)
            ->exists();
    }


    public function follows()
    {
        return $this->belongsToMany(
            'App\Models\User',
            'follows',
            'user_id',
            'following_user_id',
        );
    }

    public function toggleFollow(User $user)
    {

        $this->follows()->toggle($user);
        
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }
}
