@foreach ($blogs as $blog)
    @if ($blog->id !== $latestBlog->id ?? null)
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all hover:translate-y-[-5px] group animate-fadeIn" style="animation-delay: {{ 1 + ($loop->index * 0.1) }}s;" data-category="{{ $blog->category->name }}" data-id="{{ $blog->id }}">
            <div class="relative">
                <div class="bg-[#0575E6]/10 p-6 flex items-center justify-center">
                    <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}" class="rounded-lg object-cover w-full h-[250px]" />
                </div>
                <div class="absolute top-4 left-4 bg-[#E6F0FA] text-[#0575E6] px-3 py-1 rounded-full text-xs font-medium">
                    {{ $blog->category->name }}
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-center mb-2">
                    <span class="text-gray-500 text-sm">{{ $blog->publication_date }}</span>
                    <span class="mx-2 text-gray-300">•</span>
                    <span class="text-gray-500 text-sm">{{ $blog->reading_time }} min read</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#0575E6] transition-colors">{{ $blog->title }}</h3>
                <p class="text-gray-600 mb-4">
                    {{ Str::limit($blog->description, 100) }}
                </p>
                <a href="{{ route('blogs.showdetails', $blog->id) }}" class="inline-flex items-center text-[#0575E6] font-medium hover:text-[#045BB5] transition-colors">
                    Read more
                    <i class="fas fa-arrow-right ml-2 text-sm"></i>
                </a>
            </div>
        </div>
    @endif
@endforeach