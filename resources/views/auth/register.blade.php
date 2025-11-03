<x-guest-layout>
    <div class="flex min-h-screen bg-gray-50 overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle,#0575E6_1px,transparent_1px)] opacity-5"></div>
    <div class="absolute inset-0 bg-[#e6f0fa]/20"></div>

    <!-- Enhanced Image Section -->
    <div class="hidden lg:flex w-1/2 relative overflow-hidden">
        <img src="{{ asset('images/ordecity-hero.png') }}" alt="Ordecity Team" class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-br from-[#0575E6]/80 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px); background-size: 30px 30px;"></div>
        <div class="absolute right-0 top-0 w-1/3 h-screen bg-gradient-to-b from-[#0575E6]/5 to-transparent transform rotate-12"></div>

        <div class="relative z-10 flex flex-col justify-between h-full p-12 text-white">
            <div class="space-y-6">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-1 bg-white/60 rounded-full"></div>
                    <div class="text-sm tracking-wider">JOIN OUR COMMUNITY</div>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                    Ordecity
                    <span class="block text-2xl md:text-3xl font-light mt-2">Empowering Growth</span>
                </h1>
                <p class="text-lg md:text-xl max-w-md">
                    Start your journey to organizational excellence with tailored development solutions
                </p>
            </div>

            <div class="space-y-8">
                <div class="flex space-x-4">
                    <div class="h-px w-8 bg-white/40 my-auto"></div>
                    <p class="text-sm">COLLABORATIVE • EFFECTIVE • SUSTAINABLE</p>
                </div>

                <div class="absolute bottom-24 left-12 z-20">
                    <div class="bg-white/90 backdrop-blur rounded-xl p-4 shadow-xl border border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-[#0575E6]/10 flex items-center justify-center">
                                <i class="fas fa-shield-alt text-[#0575E6] text-xl"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">10K+ Employees Trained</div>
                                <div class="text-sm text-gray-600">Across 20+ African Regions</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Form Section -->
    <div class="w-full lg:w-1/2 bg-gradient-to-b from-gray-50 to-white px-8 lg:px-12 flex flex-col justify-center">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -left-32 top-1/4 w-64 h-64 rounded-full bg-gradient-to-r from-[#0575E6]/10 to-transparent blur-3xl"></div>
            <div class="absolute right-1/4 bottom-1/4 w-96 h-96 rounded-full bg-[#0575E6]/5 blur-3xl"></div>
        </div>

        <div class="w-full max-w-md mx-auto relative z-10">
            <div class="flex items-center justify-start space-x-3 mb-8">
                <div class="w-10 h-10 rounded-full bg-[#0575E6]/20 flex items-center justify-center">
                    <i class="fas fa-users text-[#0575E6] text-xl"></i>
                </div>
                <span class="text-2xl font-bold text-gray-800">Create Account</span>
            </div>

            <div class="inline-flex items-center mb-6">
                <div class="flex items-center space-x-2 bg-white/80 backdrop-blur px-4 py-2 rounded-full shadow-xl border border-gray-200">
                    <div class="flex -space-x-2">
                        <div class="w-8 h-8 rounded-full bg-[#0575E6]/20 flex items-center justify-center">
                            <i class="fas fa-lock text-[#0575E6] text-xs"></i>
                        </div>
                    </div>
                    <span class="text-gray-800 font-medium">Private & Secure Registration</span>
                </div>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <input type="hidden" name="role" value="user">

                <div class="space-y-1">
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="block w-full px-4 py-3 rounded-lg border-gray-300 shadow-sm focus:border-[#0575E6] focus:ring focus:ring-[#0575E6]/20 focus:ring-opacity-50 transition duration-150 ease-in-out @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-1">
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="block w-full px-4 py-3 rounded-lg border-gray-300 shadow-sm focus:border-[#0575E6] focus:ring focus:ring-[#0575E6]/20 focus:ring-opacity-50 transition duration-150 ease-in-out @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-1">
                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" class="block w-full px-4 py-3 rounded-lg border-gray-300 shadow-sm focus:border-[#0575E6] focus:ring focus:ring-[#0575E6]/20 focus:ring-opacity-50 transition duration-150 ease-in-out @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-1">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="block w-full px-4 py-3 rounded-lg border-gray-300 shadow-sm focus:border-[#0575E6] focus:ring focus:ring-[#0575E6]/20 focus:ring-opacity-50 transition duration-150 ease-in-out">
                </div>

                <button type="submit" class="group relative w-full flex justify-center py-3 px-6 border border-transparent rounded-lg shadow-xl text-sm font-medium text-white bg-[#0575E6] hover:bg-[#045dc1] transition-all duration-300 overflow-hidden animate-fade-in-up">
                    <div class="absolute inset-0 bg-white/20 opacity-0 group-hover:opacity-100 transform -translate-x-full group-hover:translate-x-0 transition-all duration-300"></div>
                    <span class="relative flex items-center justify-center gap-2">{{ __('Register') }} <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i></span>
                </button>

                <p class="mt-6 text-center text-sm text-gray-600">
                    Already have an account? <a href="{{ route('login') }}" class="font-medium text-[#0575E6] hover:text-[#045dc1] transition-colors duration-150 ml-1">Log in</a>
                </p>

                <p class="mt-4 text-center text-sm text-gray-600">
                    Note: Admin accounts can only be created by directly adding them to the database. Contact the system administrator for assistance.
                </p>
            </form>
        </div>
    </div>
</div>
</x-guest-layout>
