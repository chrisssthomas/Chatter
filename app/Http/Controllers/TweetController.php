<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

use Illuminate\Http\Request;

class TweetController extends Controller
{

    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline(),
            'user' => auth()->user()
        ]);
    }
    
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'body' => 'required|max:255',
            'image' => 'file',
        ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
            'image' => isset($attributes['image']) ? $attributes['image']->store('images') : null
        ]);

        return redirect('/tweets');
    }

}
