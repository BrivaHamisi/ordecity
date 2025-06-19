<x-app-layout>
<!-- Success Message -->
@if (session('success'))
    <div class="mb-4 bg-[#1E90FF]/20 text-[#00B7EB] p-4 rounded-lg flex items-center gap-2">
        <i class="fas fa-check-circle"></i>
        {{ session('success') }}
    </div>
@endif

<!-- Error Message -->
@if ($errors->has('image'))
    <div class="mb-4 bg-[#00B7EB]/20 text-[#1E90FF] p-4 rounded-lg flex items-center gap-2">
        <i class="fas fa-exclamation-circle"></i>
        {{ $errors->first('image') }}
    </div>
@endif

<!-- Edit News Article Form -->
<div class="mb-8">
    <div class="flex items-center space-x-2 mb-2">
        <div class="w-6 h-1 bg-[#1E90FF]/60 rounded-full"></div>
        <div class="text-[#00B7EB] text-sm font-medium tracking-wider">EDIT BLOG ARTICLE</div>
    </div>
    <h2 class="text-3xl font-bold text-gray-800">Edit Blog</h2>
    <p class="text-gray-600 mt-1">Update the selected blog article from xLAB Diagnostics.</p>
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

    @if (session('success'))
        <div class="mb-4 bg-[#1E90FF]/20 text-[#00B7EB] p-4 rounded-lg flex items-center gap-2">
            <i class="fas fa-check-circle"></i>
            {{ session('success') }}
        </div>
    @endif

    <form id="edit-blog-form" action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Title -->
            <div>
                <label for="title" class="block text-gray-700 text-sm font-medium mb-2">Blog Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}" class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-[#1E90FF] focus:border-[#1E90FF] transition-all" placeholder="Enter blog title" required>
                @error('title')
                    <span class="text-[#00B7EB] text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Category -->
            <div>
                <label for="category_id" class="block text-gray-700 text-sm font-medium mb-2">Category</label>
                <select name="category_id" id="category_id" class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-[#1E90FF] focus:border-[#1E90FF] transition-all" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="text-[#00B7EB] text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Description with CKEditor -->
        <div class="mb-6">
            <label for="description" class="block text-gray-700 text-sm font-medium mb-2">Description</label>
            <textarea name="description" id="description" class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-[#1E90FF] focus:border-[#1E90FF] transition-all">{{ old('description', $blog->description) }}</textarea>
            @error('description')
                <span class="text-[#00B7EB] text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Publication Date -->
            <div>
                <label for="publication_date" class="block text-gray-700 text-sm font-medium mb-2">Publication Date</label>
                <input type="date" name="publication_date" id="publication_date" value="{{ old('publication_date', $blog->publication_date) }}" class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-[#1E90FF] focus:border-[#1E90FF] transition-all" required>
                @error('publication_date')
                    <span class="text-[#00B7EB] text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Reading Time -->
            <div>
                <label for="reading_time" class="block text-gray-700 text-sm font-medium mb-2">Estimated Reading Time (minutes)</label>
                <input type="number" name="reading_time" id="reading_time" value="{{ old('reading_time', $blog->reading_time) }}" class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-[#1E90FF] focus:border-[#1E90FF] transition-all" placeholder="e.g., 5" min="1" required>
                @error('reading_time')
                    <span class="text-[#00B7EB] text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Image Upload -->
        <div class="mb-6">
            <label for="image" class="block text-gray-700 text-sm font-medium mb-2">Blog Image</label>
            <input type="file" name="image" id="image" accept="image/*" class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-[#1E90FF] focus:border-[#1E90FF] transition-all">
            @if ($blog->image)
                <p class="text-gray-600 text-sm mt-2">Current Image: <a href="{{ asset('storage/' . $blog->image) }}" target="_blank" class="text-[#00B7EB] hover:underline">View Image</a></p>
            @endif
            <p class="text-gray-500 text-xs mt-1">Recommended size: 400px x 250px for regular blogs, 600px x 400px for featured blogs. Max size: 2MB.</p>
            @error('image')
                <span class="text-[#00B7EB] text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Featured Status -->
        <div class="mb-6">
            <label class="flex items-center space-x-2">
                <input type="checkbox" name="is_featured" id="is_featured" value="1" {{ old('is_featured', $blog->is_featured) ? 'checked' : '' }} class="h-4 w-4 text-[#1E90FF] focus:ring-[#1E90FF] border-gray-300 rounded">
                <span class="text-gray-700 text-sm font-medium">Mark as Featured Blog</span>
            </label>
            @error('is_featured')
                <span class="text-[#00B7EB] text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="py-2 px-6 bg-[#1E90FF] text-white text-sm rounded-lg hover:bg-[#00B7EB] transition-colors flex items-center">
                Update Blog
                <i class="fas fa-edit ml-2"></i>
            </button>
        </div>

        <!-- Feedback Placeholder -->
        <div id="news-feedback" class="mt-4 text-sm hidden"></div>
    </form>
</div>

<!-- CKEditor CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/43.1.0/classic/ckeditor.js"></script>

<!-- JavaScript for CKEditor and Form Submission Feedback -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize CKEditor
        ClassicEditor
            .create(document.querySelector('#description'), {
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                    'outdent', 'indent', '|',
                    'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo'
                ],
                placeholder: 'Enter blog description'
            })
            .then(editor => {
                console.log('CKEditor initialized');
            })
            .catch(error => {
                console.error('CKEditor initialization failed:', error);
            });

        // Form submission feedback
        const newsForm = document.getElementById('edit-blog-form');
        const newsFeedback = document.getElementById('news-feedback');

        newsForm.addEventListener('submit', function(event) {
            newsFeedback.classList.remove('hidden');
            newsFeedback.innerHTML = `
                <div class="flex items-center justify-center gap-2 text-gray-600">
                    <i class="fas fa-spinner fa-spin text-lg"></i>
                    <span>Submitting...</span>
                </div>
            `;
        });
    });
</script>
</x-app-layout>