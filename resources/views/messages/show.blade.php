@component('components.app')

<h2 class="font-semibold mb-4">Send a message to:</h2>
<div class="flex items-center mb-4">

    <img src="/images/{{ basename($user->avatar) }}" class="w-12 mr-4" alt="">

    
    <h3 class="font-bold">{{ $user->name }}</h3>
    
</div>

    <form method="POST" action="" enctype="multipart/form-data">

        @csrf
        @method('PATCH')

        <textarea name="message" id="" cols="30" rows="10" class="border w-full mb-4"></textarea>

        <div class="button">
            <button type="submit" class="bg-blue-500 px-4 py-2 rounded text-white mr-2">Submit</button>
            <a class="px-4 py-2 rounded" href="">Cancel</a>
        </div>

    </form>
@endcomponent
