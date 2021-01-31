<div class="border border-gray-300 rounded-lg p-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea
         name="body"
         class="w-full"
         placeholder="What's up doc?"
         ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                class="rounded-full mr-2"
                alt="your avatar"
                width="50"
                height="50"
            >
            <button
                type="submit"
                class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white"
            >
                Twat
            </button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-400 text-sm mt-4">{{ $message }}</p>
    @enderror
    <div>

    </div>
</div>
