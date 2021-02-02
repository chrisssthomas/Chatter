<div>
    <h1 class="mb-2 text-lg text-bold">This user follows:</h1>
    @forelse ($user->follows as $following)
        <a href="{{ $following->path() }}" class="flex p-4 items-center bg-blue-200 rounded-lg mb-4">
            <img 
                class="rounded-full mr-4"
                width="50"
                height="50"
                alt="" 
                src="{{ $following->avatar }}"
            >
            <h1>{{ $following->name }}</h1>
        </a>
        
        @empty
            <div>This user doesn't follow anyone yet.</div>
    
    @endforelse

</div>
