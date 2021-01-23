<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    @foreach (auth()->user()->follows as $user)
    <li>
        <div class="flex items-center mb-4">
            <a href="{{route('profile', $user)}}" class="flex items-center text-sm">
                <img
                    src="{{ $user->avatar }}"
                    class="rounded-full mr-2"
                    alt=""
                >
                {{ $user->name }}
            </a>
        </div>
    </li>
    @endforeach
</ul>
