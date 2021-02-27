@component('components.app')

    <header>

        <img class="rounded-lg" src="/images/original.jpg" alt="">

        <div class="flex justify-between items-center py-4 relative">
            <div style="max-width: 270px">
                <h3 class="font-bold text-2xl mb-0">
                    {{ $user->name }}
                </h3>
                <p class="text-sm">
                    @if ($user->created_at)
                        Joined {{ $user->created_at->diffForHumans() }}
                    @endif
                </p>
                <p></p>
            </div>
            <img src="{{ $user->avatar }}" alt="" class="absolute rounded-full mr-2 w-32 h-32"
            style="
                top: -65px;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
            ">
            <div class="flex">
                @can('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="py-2 px-4 mr-2 border border-gray-300 hover:bg-gray-50 rounded-full">Edit profile</a>
                @endcan

                @if (auth()->user())
                    @component('components.follow-button', ['user' => $user]) @endcomponent
                @endif

            </div>
        </div>
        <div class="mt-4">
            <p class="text-sm text-center">
                {{$user->bio}}
            </p>
        </div>
    </header>

    @include('_timeline', [
        'tweets' => $tweets,
    ])

    @include('profiles.follows', [
        'user' => $user
    ])
@endcomponent
