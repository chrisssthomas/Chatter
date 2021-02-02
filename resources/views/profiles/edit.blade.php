@component('components.app')

    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">

        @csrf
        @method('PATCH')

        {{-- Name --}}

        <div class="mb-6">
            <label
                for="name"
                class="block mb-2 font-bold text-xs text-gray-700"
            >
                Name
            </label>

            <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full" value="{{ $user->name }}" required>
            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- Username --}}

        <div class="mb-6">
            <label
                for="username"
                class="block mb-2 font-bold text-xs text-gray-700"
            >
                Username
            </label>

            <input type="text" name="username" id="username" class="border border-gray-400 p-2 w-full" value="{{ $user->username }}"  required>
            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- Avatar --}}

        <div class="mb-6">
            <label
                for="avatar"
                class="block mb-2 font-bold text-xs text-gray-700"
            >
                Avatar
            </label>

            <input type="file" name="avatar" id="avatar" class="border border-gray-400 p-2 w-full" value="{{ $user->avatar }}" >

            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}

        <div class="mb-6">
            <label
                for="email"
                class="block mb-2 font-bold text-xs text-gray-700"
            >
                Email
            </label>

            <input type="text" name="email" id="email" class="border border-gray-400 p-2 w-full" value="{{ $user->email }}" required>
            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password --}}

        <div class="mb-6">
            <label
                for="password"
                class="block mb-2 font-bold text-xs text-gray-700"
            >
                Password
            </label>

            <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full" required>
            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password confirmation --}}

        <div class="mb-6">
            <label
                for="password_confirmation"
                class="block mb-2 font-bold text-xs text-gray-700"
            >
                Confirm Password
            </label>

            <input type="password" name="password_confirmation" id="password_confirmation" class="border border-gray-400 p-2 w-full" required>
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- Submit --}}

        <div class="button">
            <button type="submit" class="bg-blue-500 px-4 py-2 rounded text-white">Submit</button>
        </div>

    </form>
@endcomponent
