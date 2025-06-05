<footer class="bg-[#0575E6] text-white py-12">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <!-- Brand Section -->
            <div>
                <div class="flex items-center space-x-3 group mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-9 w-9 text-white group-hover:rotate-12 group-hover:scale-110 transition-all duration-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3l7-2 7 2v6c0 5-3 9-7 10-4-1-7-5-7-10V3z" />
                    </svg>
                    <span class="text-xl font-bold tracking-tight text-white group-hover:text-gray-200 transition-colors">Ordecity</span>
                </div>
                <p class="text-gray-200 text-sm mb-6 leading-relaxed">
                    Empowering businesses with innovative solutions for growth and efficiency.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-200 hover:text-white transition-all duration-200 transform hover:scale-110">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-200 hover:text-white transition-all duration-200 transform hover:scale-110">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-200 hover:text-white transition-all duration-200 transform hover:scale-110">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Navigation Links (Matching Navbar) -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-6">Navigation</h4>
                <ul class="space-y-3">
                    <li><a href="{{ url('/') }}" class="text-gray-200 hover:text-white text-sm transition-all duration-200 hover:underline">{{ request()->is('/') ? 'Home' : 'Home' }}</a></li>
                    <li><a href="/about" class="text-gray-200 hover:text-white text-sm transition-all duration-200 hover:underline">About</a></li>
                    <li><a href="/blogs" class="text-gray-200 hover:text-white text-sm transition-all duration-200 hover:underline">Blogs</a></li>
                </ul>
            </div>

            <!-- Company Links -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-6">Company</h4>
                <ul class="space-y-3">
                    <li><a href="/careers" class="text-gray-200 hover:text-white text-sm transition-all duration-200 hover:underline">Careers</a></li>
                    <li><a href="/press" class="text-gray-200 hover:text-white text-sm transition-all duration-200 hover:underline">Press</a></li>
                    <li><a href="/contact" class="text-gray-200 hover:text-white text-sm transition-all duration-200 hover:underline">Contact</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-6">Stay Updated</h4>
                <p class="text-gray-200 text-sm mb-4 leading-relaxed">
                    Subscribe to our newsletter for the latest updates and insights.
                </p>
                <div class="flex">
                    <input type="email" placeholder="Enter your email"
                        class="w-full px-4 py-2.5 rounded-l-full bg-white text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-white transition-all duration-200" />
                    <button
                        class="bg-white text-[#0575E6] px-5 py-2.5 rounded-r-full hover:bg-gray-100 transition-all duration-200 transform hover:scale-105 active:scale-95">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-12 pt-8 border-t border-gray-300/30 text-center">
            <p class="text-gray-200 text-sm">© {{ date('Y') }} Ordecity. All rights reserved.</p>
        </div>
    </div>
</footer>