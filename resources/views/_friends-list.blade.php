<h3 class="shadow font-bold text-xl mb-4">I'm following</h3>

<ul>
    @forelse (auth()->user()->follows as $user)
    <li>
        <div class="flex items-center mb-4">
            <a
                href="{{ route('profile', $user) }}"
                class="flex items-center text-sm"
            >
                @if (basename($user->avatar) === 'default-avatar.png')

                <img
                    src="/images/{{ basename($user->avatar) }}"
                    alt="{{ $user->username }}'s avatar"
                    class="rounded-full mr-2"
                    width="50"
                    height="50"
                    alt=""
                />

                @else

                <img
                    src="/storage/avatars/{{ basename($user->avatar) }}"
                    alt="/storage/avatars/{{ basename($user->avatar) }}"
                    class="rounded-full mr-2"
                    width="50"
                    height="50"
                    alt=""
                />

                @endif
                {{ $user->name }}
            </a>
        </div>
    </li>
    @empty
    <p>No friends yet.</p>
    @endforelse
</ul>
