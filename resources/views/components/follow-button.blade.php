@unless(auth()->user()->is($user))

    <form method="POST" 
        action="{{ route('follow', $user->username ) }}"
        >
        @csrf

        <button type="submit"
                class="bg-blue-400 py-2 px-4 shadow rounded-full hover:bg-blue-500 text-white"
        >
            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    </form>

@endunless
