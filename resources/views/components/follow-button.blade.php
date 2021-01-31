<form method="POST" action="/profiles/{{ $user->name }}/follow">
    @csrf

    <button type="submit"
            class="bg-blue-400 py-2 px-4 shadow rounded-full hover:bg-blue-500 text-white"
    >
        {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
</form>
