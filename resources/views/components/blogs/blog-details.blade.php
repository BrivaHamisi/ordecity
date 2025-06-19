<x-layout>
    <div class="relative overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden mb-16 animate-fadeIn">
                <div class="relative">
                    <div class="bg-[#0575E6]/10 p-10 flex items-center justify-center">
                        <img src="{{  asset($blog->image_path) }}" alt="{{ $blog->title }}" class="rounded-2xl shadow-lg object-cover w-full h-[400px]" />
                    </div>
                    <div class="absolute top-6 left-6 bg-[#E6F0FA] text-[#0575E6] px-4 py-2 rounded-full text-sm font-semibold">
                        {{ $blog->category->name }}
                    </div>
                </div>
                <div class="p-8 lg:p-12">
                    <div class="mb-4">
                        <span class="inline-block bg-[#E6F0FA] text-[#0575E6] rounded-full px-3 py-1 text-sm font-medium">
                            {{ $blog->category->name }}
                        </span>
                        <span class="text-gray-500 text-sm ml-4">{{ $blog->publication_date }}</span>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">{{ $blog->title }}</h2>
                    <div class="text-lg text-gray-600 mb-8">
                        {{ $blog->description }}
                    </div>
                    <div class="text-right text-gray-500 text-sm">
                        Estimated reading time: {{ $blog->reading_time }} minutes
                    </div>
                </div>
            </div>
            <a href="{{ route('blogs.index') }}" class="group inline-flex items-center text-[#0575E6] font-medium hover:text-[#045BB5] transition-colors">
                <i class="fas fa-arrow-left mr-2 transition-transform group-hover:-translate-x-1"></i>
                Back to News
            </a>
        </div>

        <!-- Inline Styles for Animations -->
        <style>
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(30px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .animate-fadeIn {
                animation: fadeIn 1s ease-out forwards;
            }
        </style>

        <!-- Font Awesome Script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    </div>
</x-layout>