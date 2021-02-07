@component('components.master')

    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between items-start">
                <!-- Left sidebar -->
                @if (auth()->check())
                    <div class="lg:w-32">
                        @include('_sidebar-links')
                    </div>
                @endif

                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
                    {{ $slot }}
                </div>

                <!-- Right friends list sidebar -->
                @if (auth()->check())
                    <div class="lg:w-1/6 bg-gray-100 rounded-lg p-4">
                        @include('_friends-list')
                    </div>
                @endif
            </div>
        </main>
    </section>

@endcomponent