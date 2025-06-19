<x-app-layout>
<div class="mb-8">
    <div class="flex items-center space-x-2 mb-2">
        <div class="w-6 h-1 bg-[#1E90FF]/60 rounded-full"></div>
        <div class="text-[#00B7EB] text-sm font-medium tracking-wider">EDIT CATEGORY</div>
    </div>
    <h2 class="text-3xl font-bold text-gray-800">Edit Category</h2>
    <p class="text-gray-600 mt-1">Update the details of this category for blogs on Ordecity.</p>
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

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Category Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-[#1E90FF] focus:border-[#1E90FF] transition-all" placeholder="Enter category name" required>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="py-2 px-6 bg-[#1E90FF] text-white text-sm rounded-lg hover:bg-[#00B7EB] transition-colors flex items-center">
                Update Category
                <i class="fas fa-save ml-2"></i>
            </button>
        </div>
    </form>
</div>
</x-app-layout>