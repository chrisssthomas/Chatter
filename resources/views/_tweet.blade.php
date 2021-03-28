<div class="flex p-4 border-b border-b-gray-50 tweet">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">

            @if (basename($tweet->user->avatar) === 'default-avatar.png')

                <img src="/images/{{ basename($tweet->user->avatar) }}" alt="{{ $tweet->user->avatar }}'s avatar" class="rounded-full focus-within w-14 h-14 mr-2"
                alt="{{ $tweet->user->name }}'s profile photo">

            @else

                <img src="/storage/avatars/{{ basename($tweet->user->avatar) }}" alt="{{ $tweet->user->avatar }}'s avatar" class="rounded-full focus-within w-14 h-14 mr-2"
                alt="{{ $tweet->user->name }}'s profile photo">

            @endif
        </a>
    </div>

    <div>
        <a href="{{ route('profile', $tweet->user) }}">
            <h5 class="font-bold mb-4">
                {{ $tweet->user->name }}
            </h5>
        </a>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>

        @if ($tweet->image != null) 

            <img style="max-width: 100%;" class="rounded-lg border mt-2" src="/storage/images/{{ basename($tweet->image) }}" alt="{{ $tweet->image }}">

        @endif

        <p class="text-sm text-dark mt-4">{{ $tweet->created_at->diffForHumans() }}</p>

        @include('components.like-component',
        [
            'tweet' => $tweet,
        ])

    </div>
</div>
