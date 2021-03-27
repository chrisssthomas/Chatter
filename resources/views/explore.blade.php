@component('components.app')
    <div>
        @foreach ($users as $user)
            <a href="{{ $user->path() }}" class="flex items-center">
                <img src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar" width="60" class="rounded-full m-2">
                <h3>{{ '@' . $user->username }}</h3>
            </a>
        @endforeach
    </div>
@endcomponent