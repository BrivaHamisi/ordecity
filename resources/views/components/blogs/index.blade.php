<div class="relative overflow-hidden bg-white">
    <!-- Header Banner -->
    <div class="bg-white py-3 px-4 sm:px-6 lg:px-8 flex justify-end">
        <p class="text-sm text-[#0575E6] font-medium">
            Aug 4th • In SF? <a href="#onboarding" class="underline hover:text-[#045BB5] transition-colors">Join our
                upcoming onboarding</a>
        </p>
    </div>

    <!-- News Page Hero Section -->
    <div class="relative mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-b-[40px] overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-[#E6F0FA] to-[#A3CFFF]"></div>
                <div
                    class="absolute inset-0 bg-[linear-gradient(90deg,rgba(255,255,255,0.1)_1px,transparent_1px),linear-gradient(180deg,rgba(255,255,255,0.1)_1px,transparent_1px)] bg-[size:20px_20px] rounded-b-[40px]">
                </div>
                <div class="relative pt-16 pb-16">
                    <div class="text-center mb-16">
                        <h1
                            class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-[#0575E6] leading-tight mb-4 animate-zoomIn">
                            News & Updates
                        </h1>
                        <p class="text-lg sm:text-xl text-[#0575E6] max-w-2xl mx-auto animate-fadeIn"
                            style="animation-delay: 0.5s;">
                            Discover the latest innovations, research, and developments in organizational development
                            from Ordecity.
                        </p>
                    </div>

                    <!-- Featured Article (Latest Blog) -->
                    <div class="bg-white rounded-3xl shadow-xl overflow-hidden mb-16 hover:shadow-2xl transition-shadow animate-fadeIn"
                        style="animation-delay: 0.7s;">
                        <div class="md:flex">
                            <div class="md:w-1/2 relative">
                                <div class="bg-[#0575E6]/10 h-full flex items-center justify-center p-10">
                                    <img src="{{ $latestBlog ? asset($latestBlog->image_path) : 'https://images.unsplash.com/photo-1516321310763-383fb7b3d7fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80' }}"
                                        alt="{{ $latestBlog->title ?? 'Ordecity Competency Framework Launch' }}"
                                        class="rounded-2xl shadow-lg object-cover w-full h-full" />
                                </div>
                                <div
                                    class="absolute top-6 left-6 bg-[#0575E6] text-white px-4 py-2 rounded-full text-sm font-semibold">
                                    Featured
                                </div>
                            </div>
                            <div class="md:w-1/2 p-8 lg:p-12 flex flex-col justify-center">
                                <div class="mb-4">
                                    <span
                                        class="inline-block bg-[#E6F0FA] text-[#0575E6] rounded-full px-3 py-1 text-sm font-medium">
                                        {{ $latestBlog->category->name ?? 'Innovation' }}
                                    </span>
                                    <span
                                        class="text-gray-500 text-sm ml-4">{{ $latestBlog->publication_date ?? 'February 20, 2025' }}</span>
                                </div>
                                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                                    {{ $latestBlog->title ?? 'Ordecity Launches New Competency Framework Nationwide' }}
                                </h2>
                                <p class="text-lg text-gray-600 mb-6">
                                    {{ Str::limit($latestBlog->description ?? 'Ordecity is proud to announce the nationwide rollout of our innovative competency framework, empowering organizations with strategic employee development tools.', 350) }}
                                </p>
                                <div class="mt-auto">
                                    <a href="{{ route('blogs.showdetails', $latestBlog->id ?? '#') }}"
                                        class="group inline-flex items-center text-[#0575E6] font-medium hover:text-[#045BB5] transition-colors">
                                        Read full article
                                        <i
                                            class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters & Search Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white/80 backdrop-blur rounded-2xl shadow-lg p-6 mb-12 animate-fadeIn"
            style="animation-delay: 0.9s;">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div class="flex flex-wrap gap-2" id="category-filters">
                    <button data-category="all"
                        class="tab-btn bg-[#0575E6] text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-[#045BB5] transition-colors active">All
                        Updates</button>
                    @foreach ($categories as $category)
                        <button data-category="{{ $category->name }}"
                            class="tab-btn bg-white text-[#0575E6] px-4 py-2 rounded-lg text-sm font-medium hover:bg-[#E6F0FA] border border-[#0575E6] transition-colors">{{ $category->name }}</button>
                    @endforeach
                </div>
                <div class="relative flex-grow md:max-w-md">
                    <input type="text" id="search-input" placeholder="Search articles..."
                        class="w-full pl-10 pr-4 py-3 rounded-lg border border-[#0575E6] focus:ring-2 focus:ring-[#0575E6] focus:border-[#0575E6] transition-all">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-search text-[#0575E6]"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- News Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16" id="blog-grid">
            @foreach ($blogs as $blog)
                @if ($blog->id !== $latestBlog->id)
                    <!-- Exclude featured blog -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all hover:translate-y-[-5px] group animate-fadeIn"
                        style="animation-delay: {{ 1 + $loop->index * 0.1 }}s;"
                        data-category="{{ $blog->category->name }}">
                        <div class="relative">
                            <div class="bg-[#0575E6]/10 p-6 flex items-center justify-center">
                                <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}"
                                    class="rounded-lg object-cover w-full h-[250px]" />
                            </div>
                            <div
                                class="absolute top-4 left-4 bg-[#E6F0FA] text-[#0575E6] px-3 py-1 rounded-full text-xs font-medium">
                                {{ $blog->category->name }}
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-2">
                                <span class="text-gray-500 text-sm">{{ $blog->publication_date }}</span>
                                <span class="mx-2 text-gray-300">•</span>
                                <span class="text-gray-500 text-sm">{{ $blog->reading_time }} min read</span>
                            </div>
                            <h3
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#0575E6] transition-colors">
                                {{ $blog->title }}</h3>
                            <p class="text-gray-600 mb-4">
                                {{ Str::limit($blog->description, 100) }}
                            </p>
                            <a href="{{ route('blogs.showdetails', $blog->id) }}"
                                class="inline-flex items-center text-[#0575E6] font-medium hover:text-[#045BB5] transition-colors">
                                Read more
                                <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center animate-fadeIn" style="animation-delay: 1.3s;">
            <nav class="flex items-center space-x-2">
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-[#0575E6] bg-white text-[#0575E6] hover:bg-[#E6F0FA] transition-colors">
                    <i class="fas fa-chevron-left text-sm"></i>
                </a>
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#0575E6] text-white">1</a>
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-[#0575E6] bg-white text-[#0575E6] hover:bg-[#E6F0FA] transition-colors">2</a>
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-[#0575E6] bg-white text-[#0575E6] hover:bg-[#E6F0FA] transition-colors">3</a>
                <span class="w-10 h-10 flex items-center justify-center text-gray-500">...</span>
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-[#0575E6] bg-white text-[#0575E6] hover:bg-[#E6F0FA] transition-colors">8</a>
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-[#0575E6] bg-white text-[#0575E6] hover:bg-[#E6F0FA] transition-colors">
                    <i class="fas fa-chevron-right text-sm"></i>
                </a>
            </nav>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-[#0575E6] to-[#045BB5] rounded-3xl overflow-hidden shadow-xl">
                <div class="relative px-6 py-16 md:px-12 text-center">
                    <div
                        class="absolute inset-0 bg-[linear-gradient(90deg,rgba(255,255,255,0.1)_1px,transparent_1px),linear-gradient(180deg,rgba(255,255,255,0.1)_1px,transparent_1px)] bg-[size:20px_20px]">
                    </div>
                    <div class="relative z-10">
                        <h2 class="text-3xl font-bold text-white mb-4 animate-fadeIn" style="animation-delay: 0.5s;">
                            Stay Updated with Ordecity</h2>
                        <p class="text-white/90 max-w-2xl mx-auto mb-8 animate-fadeIn" style="animation-delay: 0.7s;">
                            Subscribe to our newsletter to receive the latest news, insights, and updates on
                            organizational development.
                        </p>
                        <div class="max-w-lg mx-auto animate-fadeIn" style="animation-delay: 0.9s;">
                            <div class="flex flex-col sm:flex-row gap-4">
                                <input type="email" name="email" id="newsletterEmail"
                                    placeholder="Enter your email"
                                    class="flex-grow px-6 py-4 rounded-lg focus:ring-2 focus:ring-[#E6F0FA] focus:outline-none"
                                    required />
                                <button type="submit"
                                    class="group relative px-8 py-4 bg-white text-[#0575E6] rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div
                                        class="absolute inset-0 bg-[#E6F0FA] transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300">
                                    </div>
                                    <span class="relative flex items-center justify-center gap-2">
                                        Subscribe
                                        <i
                                            class="fas fa-paper-plane transition-transform group-hover:translate-x-1"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div id="newsletterFeedback" class="mt-4 hidden"></div>
                        <p class="text-white/80 text-sm mt-4 animate-fadeIn" style="animation-delay: 1.1s;">
                            We respect your privacy. You can unsubscribe at any time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming Events Section -->
    {{-- <div class="bg-[#E6F0FA] py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#0575E6] mb-4 animate-fadeIn" style="animation-delay: 0.5s;">
                    Upcoming Events</h2>
                <p class="text-xl text-[#0575E6] max-w-2xl mx-auto animate-fadeIn" style="animation-delay: 0.7s;">Join
                    us at these upcoming events to learn more about organizational development innovations</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Event Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all group animate-fadeIn"
                    style="animation-delay: 0.9s;">
                    <div class="md:flex h-full">
                        <div class="md:w-1/3 bg-[#0575E6] text-white p-6 flex flex-col items-center justify-center">
                            <span class="text-5xl font-bold">15</span>
                            <span class="text-xl">March</span>
                            <span class="mt-2 bg-white/20 rounded-full px-4 py-1 text-sm">Workshop</span>
                        </div>
                        <div class="md:w-2/3 p-6 flex flex-col justify-center">
                            <h3
                                class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#0575E6] transition-colors">
                                Leadership Innovation Summit</h3>
                            <div class="flex items-center text-gray-600 mb-4">
                                <i class="fas fa-map-marker-alt mr-2 text-[#0575E6]"></i>
                                <span>San Francisco Convention Center, USA</span>
                            </div>
                            <p class="text-gray-600 mb-4">
                                Join our CEO for a keynote presentation on revolutionizing organizational development
                                strategies.
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-[#0575E6] font-medium hover:text-[#045BB5] transition-colors">
                                Learn more
                                <i
                                    class="fas fa-arrow-right ml-2 text-sm transition-transform group-hover:translate-x-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Event Card 2 (Fixed) -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all group animate-fadeIn"
                    style="animation-delay: 1s;">
                    <div class="md:flex h-full">
                        <div class="md:w-1/3 bg-[#0575E6] text-white p-6 flex flex-col items-center justify-center">
                            <span class="text-5xl font-bold">22</span>
                            <span class="text-xl">March</span>
                            <span class="mt-2 bg-white/20 rounded-full px-4 py-1 text-sm">Webinar</span>
                        </div>
                        <div class="md:w-2/3 p-6 flex flex-col justify-center">
                            <h3
                                class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#0575E6] transition-colors">
                                Digital Development Transformation</h3>
                            <div class="flex items-center text-gray-600 mb-4">
                                <i class="fas fa-video mr-2 text-[#0575E6]"></i>
                                <span>Online Event - Registration Required</span>
                            </div>
                            <p class="text-gray-600 mb-4">
                                Learn how our digital solutions are enhancing organizational growth across global
                                markets.
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-[#0575E6] font-medium hover:text-[#045BB5] transition-colors">
                                Register now
                                <i
                                    class="fas fa-arrow-right ml-2 text-sm transition-transform group-hover:translate-x-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Inline Styles for Animations -->
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 1s ease-out forwards;
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.8);
                filter: blur(4px);
            }

            to {
                opacity: 1;
                transform: scale(1);
                filter: blur(0);
            }
        }

        .animate-zoomIn {
            animation: zoomIn 1s ease-out forwards;
        }

        @keyframes feedbackFadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .feedback-animate {
            animation: feedbackFadeIn 0.5s ease-out forwards;
        }
    </style>

    <!-- JavaScript for Newsletter Subscription, Category Filtering, and Search -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const newsletterForm = document.getElementById('newsletterForm');
            const newsletterFeedback = document.getElementById('newsletterFeedback');
            const categoryFilters = document.getElementById('category-filters');
            const blogGrid = document.getElementById('blog-grid');
            const searchInput = document.getElementById('search-input');

            // Newsletter Subscription
            newsletterForm.addEventListener('submit', function(event) {
                event.preventDefault();
                newsletterFeedback.classList.remove('hidden', 'feedback-animate');
                newsletterFeedback.innerHTML = `
                    <div class="flex items-center justify-center gap-2 text-white/80">
                        <i class="fas fa-spinner fa-spin text-lg"></i>
                        <span>Submitting...</span>
                    </div>
                `;

                const formData = new FormData(newsletterForm);

                fetch('/subscribe', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                ?.getAttribute('content'),
                            'Accept': 'application/json',
                        },
                        body: formData,
                    })
                    .then(response => response.json())
                    .then(data => {
                        newsletterFeedback.classList.add('feedback-animate');
                        if (data.success) {
                            newsletterFeedback.innerHTML = `
                            <div class="flex items-center justify-center gap-3 bg-white/10 backdrop-blur-sm p-4 rounded-lg border border-white/20 shadow-lg text-green-200">
                                <i class="fas fa-check-circle text-xl"></i>
                                <span class="font-medium">${data.message}</span>
                            </div>
                        `;
                            newsletterForm.reset();
                        } else {
                            newsletterFeedback.innerHTML = `
                            <div class="flex items-center justify-center gap-3 bg-[#E6F0FA] p-4 rounded-lg border border-[#0575E6] shadow-lg text-[#0575E6]">
                                <i class="fas fa-info-circle text-xl animate-bounce"></i>
                                <span class="font-medium">${data.message}</span>
                            </div>
                        `;
                        }
                        setTimeout(() => newsletterFeedback.classList.add('hidden'), 5000);
                    })
                    .catch(error => {
                        newsletterFeedback.classList.add('feedback-animate');
                        newsletterFeedback.innerHTML = `
                        <div class="flex items-center justify-center gap-3 bg-red-500/20 backdrop-blur-sm p-4 rounded-lg border border-red-400/50 shadow-lg text-red-200">
                            <i class="fas fa-exclamation-circle text-xl"></i>
                            <span>An error occurred: ${error.message}. Please try again.</span>
                        </div>
                    `;
                        setTimeout(() => newsletterFeedback.classList.add('hidden'), 5000);
                    });
            });

            // Category Filtering
            categoryFilters.addEventListener('click', function(e) {
                const button = e.target.closest('.tab-btn');
                if (button) {
                    categoryFilters.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove(
                        'active'));
                    button.classList.add('active');

                    const category = button.getAttribute('data-category');
                    const articles = blogGrid.querySelectorAll('div[data-category]');
                    articles.forEach(article => {
                        if (category === 'all' || article.getAttribute('data-category') ===
                            category) {
                            article.style.display = 'block';
                        } else {
                            article.style.display = 'none';
                        }
                    });
                }
            });

            // Search Functionality
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase().trim();
                const articles = blogGrid.querySelectorAll('div[data-category]');
                articles.forEach(article => {
                    const title = article.querySelector('h3').textContent.toLowerCase();
                    if (searchTerm === '' || title.includes(searchTerm)) {
                        article.style.display = 'block';
                    } else {
                        article.style.display = 'none';
                    }
                });
            });
        });
    </script>

    <!-- Font Awesome Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</div>
