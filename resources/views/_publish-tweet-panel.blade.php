<div class="border border-gray-300 rounded-lg p-8">
    <form method="POST" action="/tweets" enctype="multipart/form-data">
        @csrf
        <textarea
         name="body"
         class="w-full"
         placeholder="What's up doc?"
         ></textarea>

        <hr class="my-4">


        <label class="file">
            <input type="file" name="image" id="image" class="my-2" aria-label="File browser example" >
            <span class="file-custom"></span>
          </label>

          

        @error('image')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror


        <footer class="flex justify-between">

            <img
                src="/storage/avatars/{{ basename(auth()->user()->avatar) }}"
                class="rounded-full focus-within mt-4 w-12 h-12 mr-2"
            >
            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-full shadow px-8 text-sm text-white"
            >
                Twonk
            </button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-400 text-sm mt-4">{{ $message }}</p>
    @enderror
    <div>

    </div>
</div>