<div>
@if (empty($user->follows))
    <h1 class="mb-2 text-lg text-bold">This user follows:</h1>
@endif
@forelse ($user->follows as $following)
    <a href="{{ $following->path() }}" class="flex p-4 items-center bg-blue-200 rounded-lg mb-4">

        @if (basename($following->avatar) === 'default-avatar.png')

        <img src="/images/{{ basename($following->avatar) }}" alt="{{ $user->username }}'s avatar" class="rounded-full mr-4"
        width="50"
        height="50"
        alt="">

        @else

        <img src="/storage/avatars/{{ basename($following->avatar) }}" alt="/storage/avatars/{{ basename($user->avatar) }}" class="rounded-full mr-4"
        width="50"
        height="50"
        alt="">

        @endif

        <h1>{{ $following->name }}</h1>
    </a>

    @empty
        <div class="mb-4">This user doesn't follow anyone yet.</div>

@endforelse


</div>
