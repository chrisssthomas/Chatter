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
            <img src="{{ $user->avatar }}" alt="" class="absolute rounded-full mr-2 w-32"
            style="
                top: -40px;
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
                I'm baby lyft seitan migas keytar dreamcatcher. Poutine affogato readymade
                church-key austin vice art party hot chicken. Flannel cornhole kickstarter
                tattooed, jean shorts disrupt man braid XOXO kale chips quinoa tacos sartorial.
                90's intelligentsia literally tumeric gochujang chartreuse. Lo-fi la croix hexagon
                af VHS actually hot chicken next level, taxidermy pok pok stumptown vape quinoa.
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
