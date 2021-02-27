@component('components.master')
    
    <div class="container mx-auto px-6 py-4 flex justify-center">
        <div class="row bg-gray-100 w-full lg:w-1/3 shadow-lg border-gray-300 px-16 py-10 rounded-lg">
            <div class="col-md-8">
                    <div class="card-header font-bold text-lg mb-4">{{ __('Login') }}</div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                    Email
                                </label>
                                <div class="col-md-6">
                                    <input 
                                        type="email"
                                        class="border border-gray-400 p-2 w-full"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
                                        autofocus
                                        >

                                        @error('email')

                                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="password" class="block my-2 uppercase font-bold text-xs text-gray-700">
                                    Password
                                </label>
                                <div class="col-md-6">
                                    <input 
                                        type="password"
                                        class="border border-gray-400 p-2 w-full"
                                        id="password"
                                        name="password"
                                        value="{{ old('password') }}"
                                        required
                                        autocomplete="current-password"
                                        >

                                        @error('password')

                                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            
                                        @enderror
                                </div>
                            </div>

                            <div class="mb-6">

                                <div>
                                    <input 
                                        type="checkbox"
                                        name="remember"
                                        id="remember"
                                        class="mr-1" {{ old('remember') ? ' checked' : '' }}
                                        
                                        >

                                        <label 
                                        for="remember" 
                                        class="uppercase font-bold text-xs text-gray-700"
                                        >
                                        Remember me
                                    </label>
                                </div>

                                @error('remember')

                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                
                            @enderror
                            </div>

                            

                            <div class="mt-2">
                                <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                                <a href="{{ route('password.request') }}" class="text-xs text-gray-700">Forgot your password?</a>
                            </div>
                        </form>
            </div>
        </div>
    </div>

@endcomponent