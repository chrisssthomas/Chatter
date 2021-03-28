@component('components.app')
    <div>
        @foreach ($users as $user)
            <a href="{{ $user->path() }}" class="flex items-center">

                @if (basename($user->avatar) === 'default-avatar.png')
                    <img
                        src="/images/{{ basename($user->avatar) }}" 
                        alt="{{ $user->username }}'s avatar" 
                        width="60" 
                        class="rounded-full m-2"
                    >
                @else
                    <img 
                        src="/storage/avatars/{{ basename($user->avatar) }}" 
                        alt="{{ $user->username }}'s avatar" 
                        width="60" 
                        class="rounded-full m-2"
                    >
                @endif

                <h3>{{ '@' . $user->username }}</h3>
            </a>
        @endforeach
    </div>
@endcomponent