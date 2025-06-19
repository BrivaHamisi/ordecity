<x-app-layout>
    <!-- Success Message (if any) -->
    @if (session('success'))
        <div class="mb-4 bg-[#1E90FF]/20 text-[#00B7EB] p-4 rounded-xl flex items-center gap-2 shadow-lg animate-pulse">
            <i class="fas fa-check-circle text-lg"></i>
            {{ session('success') }}
        </div>
    @endif

    <!-- User Guide Section -->
    <div class="mb-8">
        <div class="flex items-center space-x-2 mb-2">
            <div class="w-6 h-1 bg-gradient-to-r from-[#1E90FF] to-[#00B7EB] rounded-full"></div>
            <div class="text-[#00B7EB] text-lg font-semibold tracking-wider">USER GUIDE</div>
        </div>
        <h2 class="text-4xl font-extrabold text-gray-900 bg-gradient-to-r from-[#1E90FF]/50 to-[#00B7EB]/50 bg-clip-text text-transparent">orDecity Dashboard User Guide</h2>
        <p class="text-gray-600 mt-2 text-lg">Unlock the power of your dashboard with a stunning, intuitive guide.</p>
    </div>

    <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-6 mb-8 wave-bg">
        <!-- Tab Headers -->
        <div class="flex flex-wrap border-b border-gray-200 mb-6">
            <button data-tab="posts" class="tab-btn px-6 py-3 text-lg font-medium text-gray-700 hover:text-[#1E90FF] hover:bg-[#1E90FF]/10 rounded-t-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#1E90FF] active">Posts Management</button>
            <button data-tab="categories" class="tab-btn px-6 py-3 text-lg font-medium text-gray-700 hover:text-[#1E90FF] hover:bg-[#1E90FF]/10 rounded-t-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#1E90FF]">Categories Management</button>
            <button data-tab="users" class="tab-btn px-6 py-3 text-lg font-medium text-gray-700 hover:text-[#1E90FF] hover:bg-[#1E90FF]/10 rounded-t-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#1E90FF]">Users Management</button>
            <button data-tab="tips" class="tab-btn px-6 py-3 text-lg font-medium text-gray-700 hover:text-[#1E90FF] hover:bg-[#1E90FF]/10 rounded-t-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#1E90FF]">Tips & Troubleshooting</button>
        </div>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Posts Management -->
            <div id="posts" class="tab-panel">
                <h3 class="text-3xl font-bold text-[#1E90FF] mb-6 flex items-center">
                    <i class="fas fa-pen mr-3 text-2xl"></i> Posts Management
                </h3>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="p-6 bg-gradient-to-br from-white to-[#E0F7FA]/50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4">Creating a New Post</h4>
                        <ol class="list-decimal list-inside text-gray-700 space-y-3">
                            <li>Navigate to the <span class="text-[#00B7EB] font-medium">Posts</span> menu from the sidebar.</li>
                            <li>Click <span class="text-[#00B7EB] font-medium">Create New Blog</span> to open the form.</li>
                            <li>Enter a title, select a category, and use the rich text editor for the description.</li>
                            <li>Upload an image (recommended: 400x250px) and set a publication date.</li>
                            <li>Click <span class="text-[#1E90FF] font-medium">Update Blog</span> to publish.</li>
                        </ol>
                        <div class="mt-6">
                            <img src="https://via.placeholder.com/400x250" alt="Create Post" class="rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-white to-[#E0F7FA]/50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4">Editing a Post</h4>
                        <ol class="list-decimal list-inside text-gray-700 space-y-3">
                            <li>From the Posts dashboard, click the edit icon next to a post.</li>
                            <li>Modify the title, description, or image as needed.</li>
                            <li>Save with <span class="text-[#1E90FF] font-medium">Update Blog</span>.</li>
                        </ol>
                        <div class="mt-6">
                            <img src="https://via.placeholder.com/400x250" alt="Edit Post" class="rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-white to-[#E0F7FA]/50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 lg:col-span-2">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4">Deleting a Post</h4>
                        <ol class="list-decimal list-inside text-gray-700 space-y-3">
                            <li>Find the post and click the delete icon.</li>
                            <li>Confirm in the pop-up dialog.</li>
                        </ol>
                        <div class="mt-6">
                            <img src="https://via.placeholder.com/400x250" alt="Delete Post" class="rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories Management -->
            <div id="categories" class="tab-panel hidden">
                <h3 class="text-3xl font-bold text-[#1E90FF] mb-6 flex items-center">
                    <i class="fas fa-list mr-3 text-2xl"></i> Categories Management
                </h3>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="p-6 bg-gradient-to-br from-white to-[#E0F7FA]/50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4">Adding a Category</h4>
                        <ol class="list-decimal list-inside text-gray-700 space-y-3">
                            <li>Go to the <span class="text-[#00B7EB] font-medium">Categories</span> menu.</li>
                            <li>Click <span class="text-[#00B7EB] font-medium">Add Category</span> and enter a name.</li>
                            <li>Save to create it.</li>
                        </ol>
                        <div class="mt-6">
                            <img src="https://via.placeholder.com/400x250" alt="Add Category" class="rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-white to-[#E0F7FA]/50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4">Managing Categories</h4>
                        <ol class="list-decimal list-inside text-gray-700 space-y-3">
                            <li>Edit or delete categories from the dashboard.</li>
                            <li>Ensure no posts are assigned before deletion.</li>
                        </ol>
                        <div class="mt-6">
                            <img src="https://via.placeholder.com/400x250" alt="Manage Category" class="rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Management -->
            <div id="users" class="tab-panel hidden">
                <h3 class="text-3xl font-bold text-[#1E90FF] mb-6 flex items-center">
                    <i class="fas fa-users mr-3 text-2xl"></i> Users Management
                </h3>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="p-6 bg-gradient-to-br from-white to-[#E0F7FA]/50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4">Adding a User</h4>
                        <ol class="list-decimal list-inside text-gray-700 space-y-3">
                            <li>Navigate to the <span class="text-[#00B7EB] font-medium">Users</span> menu.</li>
                            <li>Click <span class="text-[#00B7EB] font-medium">Add User</span> and fill in details (name, email, role).</li>
                            <li>Save to add the user.</li>
                        </ol>
                        <div class="mt-6">
                            <img src="https://via.placeholder.com/400x250" alt="Add User" class="rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-white to-[#E0F7FA]/50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4">Editing a User</h4>
                        <ol class="list-decimal list-inside text-gray-700 space-y-3">
                            <li>Select a user and click the edit icon.</li>
                            <li>Update role or details and save.</li>
                        </ol>
                        <div class="mt-6">
                            <img src="https://via.placeholder.com/400x250" alt="Edit User" class="rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-white to-[#E0F7FA]/50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 lg:col-span-2">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4">Deleting a User</h4>
                        <ol class="list-decimal list-inside text-gray-700 space-y-3">
                            <li>Click the delete icon next to a user.</li>
                            <li>Confirm deletion in the dialog.</li>
                        </ol>
                        <div class="mt-6">
                            <img src="https://via.placeholder.com/400x250" alt="Delete User" class="rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tips & Troubleshooting -->
            <div id="tips" class="tab-panel hidden">
                <h3 class="text-3xl font-bold text-[#1E90FF] mb-6 flex items-center">
                    <i class="fas fa-lightbulb mr-3 text-2xl"></i> Tips & Troubleshooting
                </h3>
                <div class="p-6 bg-gradient-to-br from-white to-[#E0F7FA]/50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <ul class="list-disc list-inside text-gray-700 space-y-4">
                        <li><strong class="text-[#00B7EB]">Tip:</strong> Use high-quality images (400x250px) for featured posts.</li>
                        <li><strong class="text-[#00B7EB]">Troubleshooting:</strong> If the form fails, check required fields or image size (max 2MB).</li>
                        <li><strong class="text-[#00B7EB]">Support:</strong> Contact us at <a href="mailto:support@xlabdiagnostics.com" class="text-[#1E90FF] hover:underline">support@xlabdiagnostics.com</a>.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Styles -->
    <style>
        .wave-bg {
            background: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"%3E%3Cpath fill="%23E0F7FA" fill-opacity="0.9" d="M0,128L48,138.7C96,149,192,171,288,186.7C384,203,480,213,576,202.7C672,192,768,160,864,149.3C960,139,1056,149,1152,170.7C1248,192,1344,224,1392,240L1440,256V320H0Z"%3E%3C/path%3E%3C/svg%3E');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: bottom;
            animation: waveAnimation 12s infinite ease-in-out;
        }
        @keyframes waveAnimation {
            0% { background-position: 0 bottom; }
            50% { background-position: 200px bottom; }
            100% { background-position: 0 bottom; }
        }
        .tab-panel {
            display: none;
        }
        .tab-panel.active {
            display: block;
            animation: fadeIn 0.5s ease-in;
        }
        .tab-btn.active {
            background: linear-gradient(90deg, #1E90FF, #00B7EB);
            color: white;
            border-bottom: none;
            box-shadow: 0 4px 10px rgba(30, 144, 255, 0.3);
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .animate-pulse {
            animation: pulse 1.5s infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.6; }
        }
    </style>

    <!-- JavaScript for Tab Functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab-btn');
            const panels = document.querySelectorAll('.tab-panel');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs and panels
                    tabs.forEach(t => t.classList.remove('active'));
                    panels.forEach(p => p.classList.remove('active'));

                    // Add active class to clicked tab and corresponding panel
                    this.classList.add('active');
                    const panelId = this.getAttribute('data-tab');
                    document.getElementById(panelId).classList.add('active');
                });
            });

            // Activate the first tab by default
            tabs[0].classList.add('active');
            panels[0].classList.add('active');
        });
    </script>

    <!-- Font Awesome Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</x-app-layout>