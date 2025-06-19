<x-app-layout>
<div class="mb-8">
    <div class="flex items-center space-x-2 mb-2">
        <div class="w-6 h-1 bg-[#1E90FF]/60 rounded-full"></div>
        <div class="text-[#00B7EB] text-sm font-medium tracking-wider">CATEGORIES</div>
    </div>
    <h2 class="text-3xl font-bold text-gray-800">Manage Categories</h2>
    <p class="text-gray-600 mt-1">View and manage all categories for blogs on Ordecity.</p>
</div>

<div class="bg-white rounded-xl shadow-md border border-gray-100 p-6">
    @if (session('success'))
        <div class="mb-4 bg-[#1E90FF]/20 text-[#00B7EB] p-4 rounded-lg flex items-center gap-2">
            <i class="fas fa-check-circle"></i>
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-6">
        <a href="{{ route('categories.create') }}" class="py-2 px-4 bg-[#1E90FF] text-white text-sm rounded-lg hover:bg-[#00B7EB] transition-colors">
            Add New Category
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-gray-600">ID</th>
                    <th class="px-4 py-2 text-gray-600">Name</th>
                    <th class="px-4 py-2 text-gray-600">Created At</th>
                    <th class="px-4 py-2 text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $category->id }}</td>
                        <td class="px-4 py-2">{{ $category->name }}</td>
                        <td class="px-4 py-2">{{ $category->created_at->format('Y-m-d') }}</td>
                        <td class="px-4 py-2">
                            {{-- <a href="#" class="text-[#1E90FF] hover:text-[#00B7EB] mr-2">Edit</a> --}}
                            <a href="{{ route('categories.edit', $category->id) }}" class="text-[#1E90FF] hover:text-[#00B7EB] mr-2">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</x-app-layout>