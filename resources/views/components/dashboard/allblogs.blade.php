<x-app-layout>
    <!-- Success Message -->
    @if (session('success'))
        <div class="mb-4 bg-[#1E90FF]/20 text-[#00B7EB] p-4 rounded-lg flex items-center gap-2">
            <i class="fas fa-check-circle"></i>
            {{ session('success') }}
        </div>
    @endif

    <!-- Blog Management -->
    <div class="mb-8">
        <div class="flex items-center space-x-2 mb-2">
            <div class="w-6 h-1 bg-[#1E90FF]/60 rounded-full"></div>
            <div class="text-[#00B7EB] text-sm font-medium tracking-wider">BLOG MANAGEMENT</div>
        </div>
        <h2 class="text-3xl font-bold text-gray-800">Blog Dashboard</h2>
        <p class="text-gray-600 mt-1">Manage and monitor blog articles on Ordecity.</p>
    </div>

    <div class="bg-white rounded-xl shadow-md border border-gray-100 p-6">
        @if ($errors->any())
            <div class="mb-4 bg-[#00B7EB]/20 text-[#1E90FF] p-4 rounded-lg flex items-center gap-2">
                <i class="fas fa-exclamation-circle"></i>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="flex justify-end mb-4">
            <a href="{{ route('blogs.create') }}" class="py-2 px-6 bg-[#1E90FF] text-white text-sm rounded-lg hover:bg-[#00B7EB] transition-colors flex items-center">
                Create New Blog
                <i class="fas fa-plus-circle ml-2"></i>
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <th class="px-4 py-3 text-left">ID</th>
                        <th class="px-4 py-3">Title</th>
                        <th class="px-4 py-3">Category</th>
                        <th class="px-4 py-3">Image</th> <!-- New column for image -->
                        <th class="px-4 py-3">Publication Date</th>
                        <th class="px-4 py-3">Reading Time</th>
                        <th class="px-4 py-3">Featured</th>
                        <th class="px-4 py-3 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($blogs as $blog)
                        <tr class="hover:bg-[#1E90FF]/10 transition duration-150 ease-in-out">
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $blog->id }}
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $blog->title }}
                                </div>
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $blog->category->name ?? 'N/A' }}
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                @if($blog->image_path)
                                    <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}" style="max-width: 100px; max-height: 100px;">
                                @else
                                    No image
                                @endif
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $blog->publication_date ? $blog->publication_date->format('M d, Y') : 'N/A' }}
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $blog->reading_time ?? 'N/A' }} min
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $blog->is_featured ? 'Yes' : 'No' }}
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap text-right">
                                <div class="flex justify-end space-x-3">
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="text-[#00B7EB] hover:text-[#FF8829] transition duration-300 ease-in-out">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-[#00B7EB] hover:text-[#FF8829] transition duration-300 ease-in-out">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if($blogs->hasPages())
            <div class="px-4 py-3 border-t border-gray-100 sm:px-6 mt-4">
                {{ $blogs->links() }}
            </div>
        @endif
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</x-app-layout>