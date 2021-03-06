<div class="flex pt-4">
    <form method="POST"
          class="mr-4"
          action="/tweets/{{ $tweet->id }}/like"
    >
        @csrf

        <button type="submit"
                class="text-xs">

        <span class="material-icons {{ $tweet->isLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
            thumb_up
        </span>


        </button>
        <span>
            {{ $tweet->likes ?: 0 }}
        </span>
    </form>

    <form method="POST"
          action="/tweets/{{ $tweet->id }}/like"
    >
        @csrf
        @method('DELETE')

        <button type="submit"
                class="text-xs">

        <span class="material-icons {{ $tweet->isDislikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
            thumb_down
        </span>

        </button>
        <span>
            {{ $tweet->dislikes ?: 0 }}
        </span>
    </form>
</div>
