<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach (range(1, 8) as $item)
    <li>
        <div class="flex items-center mb-4">
            <img src="https://i.pravatar.cc/40" class="rounded-full mr-2" alt="">
            John Doe
        </div>
    </li>
    @endforeach
</ul>