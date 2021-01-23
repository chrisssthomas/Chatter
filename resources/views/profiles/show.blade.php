@extends('layouts.app')

@section('content')
    <header>

        <img class="rounded-lg" src="/images/original.jpg" alt="">

        <div class="flex justify-between py-4 relative">
            <div>
                <h3 class="font-bold text-2xl mb-2">
                    {{ $user->name }}
                </h3>
                <p>
                    Joined {{ $user->created_at->diffForHumans() }}
                </p>
            </div>
            <img src="{{ $user->avatar }}" alt="" class="absolute rounded-full mr-2 w-32"
            style="
                top: -40px;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
            ">
            <div>
                <button class="bg-gray-200 p-2 mr-2 shadow rounded-md">Edit profile</button>

                <button class="bg-blue-400 p-2 shadow rounded-md text-white">Follow me</button>
            </div>
        </div>
    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection
