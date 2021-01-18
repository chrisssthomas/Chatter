@extends('layouts.app')

@section('content')
    <div class="lg:flex">
        <div class="lg:w-1/6">
            @include('_sidebar-links')
        </div>
        <div class="lg:flex-1 lg:mx-10">
            <div class="border border-blue-400 rounded-lg p-8">
                <form action="">
                    <textarea
                     name="body"
                     class="w-full"
                     placeholder="What's up doc?"
                     ></textarea>

                    <hr class="my-4">

                    <footer class="flex justify-between">
                        <img src="https://i.pravatar.cc/40" class="rounded-full mr-2" alt="">
                        <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white">Twat</button>
                    </footer>
                </form>
            </div>

            <div>

            </div>
        </div>
        <div class="lg:w-1/6">
            @include('_friends-list')
        </div>
    </div>
@endsection
