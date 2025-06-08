<x-guest-layout>
    <div class="flex min-h-screen bg-gray-50 overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle,#0575E6_1px,transparent_1px)] opacity-5"></div>
    <div class="absolute inset-0 bg-[#e6f0fa]/20"></div>

    <!-- Left Image Section -->
    <div class="hidden lg:flex w-1/2 relative overflow-hidden">
        <img src="{{ asset('images/ordecity-verification-background.jpg') }}" alt="Ordecity Team" class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-br from-[#0575E6]/80 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px); background-size: 30px 30px;"></div>
        <div class="absolute right-0 top-0 w-1/3 h-screen bg-gradient-to-b from-[#0575E6]/5 to-transparent transform rotate-12"></div>

        <div class="relative z-10 flex flex-col justify-between h-full p-12 text-white">
            <div class="space-y-6">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-1 bg-white/60 rounded-full"></div>
                    <div class="text-sm tracking-wider">EMAIL VERIFICATION</div>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                    Ordecity
                    <span class="block text-2xl md:text-3xl font-light mt-2">Verify Your Account</span>
                </h1>
                <p class="text-lg md:text-xl max-w-md">
                    Confirm your email to unlock your personalized development dashboard and enhance your organization’s growth
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
                                <div class="font-semibold text-gray-900">Secure Verification</div>
                                <div class="text-sm text-gray-600">Trusted Process</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <div class="w-full lg:w-1/2 bg-gradient-to-b from-gray-50 to-white px-8 lg:px-12 flex flex-col justify-center">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -left-32 top-1/4 w-64 h-64 rounded-full bg-gradient-to-r from-[#0575E6]/10 to-transparent blur-3xl"></div>
            <div class="absolute right-1/4 bottom-1/4 w-96 h-96 rounded-full bg-[#0575E6]/5 blur-3xl"></div>
        </div>

        <div class="w-full max-w-md mx-auto relative z-10">
            <div class="bg-white/90 backdrop-blur rounded-xl p-8 shadow-lg border border-gray-100 animate-fade-in-up">
                <div class="mb-6 text-sm text-gray-600">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-6 font-medium text-sm text-[#0575E6] animate-fade-in-up">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif

                <div class="mt-6 flex items-center justify-between gap-4">
                    <form method="POST" action="{{ route('verification.send') }}" class="flex-1">
                        @csrf
                        <button type="submit" class="group relative w-full flex justify-center py-3 px-6 border border-transparent rounded-lg shadow-xl text-sm font-medium text-white bg-[#0575E6] hover:bg-[#045dc1] transition-all duration-300 overflow-hidden animate-fade-in-up">
                            <div class="absolute inset-0 bg-white/20 opacity-0 group-hover:opacity-100 transform -translate-x-full group-hover:translate-x-0 transition-all duration-300"></div>
                            <span class="relative flex items-center justify-center gap-2">{{ __('Resend Verification Email') }} <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i></span>
                        </button>
                    </form>

                    <form method="POST" action="{{ route('logout') }}" class="flex-1">
                        @csrf
                        <button type="submit" class="w-full underline text-sm text-[#0575E6] hover:text-[#045dc1] transition-colors duration-150 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0575E6] animate-fade-in-up">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>
