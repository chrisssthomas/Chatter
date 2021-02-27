<h3 class="font-bold text-xl mb-4">I'm following</h3>

<ul>
    @forelse (auth()->user()->follows as $user)
    <li>
        <div class="flex items-center mb-4">
            <a href="{{route('profile', $user)}}" class="flex items-center text-sm">
                <img
                    src="{{ $user->avatar }}"
                    class="rounded-full mr-2"
                    width="50"
                    height="50"
                    alt=""
                >
                {{ $user->name }}
            </a>
        </div>
    </li>
    @empty
        <p>No friends yet.</p>
    @endforelse
</ul>
