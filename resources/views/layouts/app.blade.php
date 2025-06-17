<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
        
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            /* Custom styles for wave background and rounded sidebar */
            .wave-bg {
                background: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"%3E%3Cpath fill="%23E0F7FA" fill-opacity="0.5" d="M0,128L48,138.7C96,149,192,171,288,186.7C384,203,480,213,576,202.7C672,192,768,160,864,149.3C960,139,1056,149,1152,170.7C1248,192,1344,224,1392,240L1440,256V320H0Z"%3E%3C/path%3E%3C/svg%3E');
                background-size: cover;
                background-repeat: no-repeat;
            }
            .card {
                background: rgba(255, 255, 255, 0.9);
                border-radius: 15px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .rounded-left {
                border-top-left-radius: 20px;
                border-bottom-left-radius: 20px;
            }
        </style>
    @endif
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-50">
        <div class="flex min-h-screen">
            <!-- Left Sidebar/Navbar (collapsible) -->
            <div id="sidebar"
                class="fixed inset-y-0 left-0 z-30 w-64 bg-gradient-to-b from-[#1E90FF] to-[#00B7EB] text-white transition-transform duration-300 transform md:translate-x-0 -translate-x-full rounded-left">
                <!-- Logo and Brand -->
                <div class="flex items-center justify-between p-4 border-b border-[#00B7EB]/20">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full bg-[#00B7EB]/20 flex items-center justify-center">
                            <i class="fas fa-flask text-white text-xl"></i>
                        </div>
                        <h1 class="text-xl font-bold text-white">orDecity</h1>
                    </div>
                    <button id="close-sidebar" class="p-2 rounded-md text-white hover:bg-[#00B7EB] md:hidden">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <!-- Navigation -->
                <nav class="space-y-1 p-4">
                    <a href="#"
                        class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-[#00B7EB] text-white font-medium">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 px-4 py-3 rounded-lg text-white hover:bg-[#00B7EB]/50">
                        <i class="fas fa-pen"></i>
                        <span>Posts</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 px-4 py-3 rounded-lg text-white hover:bg-[#00B7EB]/50">
                        <i class="fas fa-list"></i>
                        <span>Categories</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 px-4 py-3 rounded-lg text-white hover:bg-[#00B7EB]/50">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 px-4 py-3 rounded-lg text-white hover:bg-[#00B7EB]/50">
                        <i class="fas fa-camera"></i>
                        <span>Media</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 px-4 py-3 rounded-lg text-white hover:bg-[#00B7EB]/50">
                        <i class="fas fa-cogs"></i>
                        <span>Settings</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-[#00B7EB] text-white font-medium mt-4">
                        <i class="fas fa-book"></i>
                        <span>User Guide</span>
                    </a>
                </nav>
            </div>

            <!-- Overlay for sidebar on mobile -->
            <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden md:hidden"></div>

            <!-- Main content area (adjusted to accommodate sidebar) -->
            <div class="w-full md:ml-64 transition-all duration-300 flex flex-col">
                <!-- Header section -->
                <header class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-10">
                    <div class="px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
                        <!-- Menu button -->
                        <button id="open-sidebar" type="button"
                            class="md:hidden rounded-md p-2 text-gray-600 hover:bg-gray-100">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div class="flex items-center space-x-3 md:ml-0 ml-4">
                            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Dashboard</h1>
                            <p class="text-gray-500 text-sm">Home / Dashboard</p>
                        </div>

                        <!-- User profile -->
                        <div class="flex items-center space-x-3">
                            <img src="https://via.placeholder.com/40" alt="User" class="w-10 h-10 rounded-full">
                            <div>
                                <h3 class="font-medium text-gray-800">Ryan Adhitama</h3>
                                <p class="text-sm text-gray-500">Web Developer</p>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Page Main Content -->
                <main class="flex-1 px-4 sm:px-6 lg:px-8 py-8">
                    {{ $slot }}
                </main>

                <!-- Page Main Content -->
                {{-- <main class="flex-1 px-4 sm:px-6 lg:px-8 py-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <!-- Posts Card -->
                        <div class="card p-4 text-center">
                            <p class="text-gray-600">Posts</p>
                            <h2 class="text-3xl font-bold text-[#1E90FF]">10</h2>
                            <i class="fas fa-pen text-[#1E90FF] text-2xl mt-2"></i>
                        </div>
                        <!-- Categories Card -->
                        <div class="card p-4 text-center">
                            <p class="text-gray-600">Categories</p>
                            <h2 class="text-3xl font-bold text-[#1E90FF]">3</h2>
                            <i class="fas fa-list text-[#1E90FF] text-2xl mt-2"></i>
                        </div>
                        <!-- Users Card -->
                        <div class="card p-4 text-center">
                            <p class="text-gray-600">Users</p>
                            <h2 class="text-3xl font-bold text-[#1E90FF]">2</h2>
                            <i class="fas fa-users text-[#1E90FF] text-2xl mt-2"></i>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <!-- Visitor Growth Card -->
                        <div class="card p-6">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-gray-600">Visitor Growth</p>
                                    <p class="text-sm text-gray-500">Overall Information</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="px-3 py-1 bg-[#1E90FF] text-white rounded-full text-sm">Monthly</button>
                                    <button class="px-3 py-1 bg-gray-200 text-gray-600 rounded-full text-sm">Yearly</button>
                                </div>
                            </div>
                            <div class="wave-bg mt-4 h-40 flex items-end">
                                <div class="w-full h-32 bg-[#E0F7FA] opacity-75" style="clip-path: polygon(0 100%, 5% 80%, 10% 70%, 15% 60%, 20% 50%, 25% 40%, 30% 30%, 35% 20%, 40% 10%, 45% 5%, 50% 0, 55% 5%, 60% 10%, 65% 20%, 70% 30%, 75% 40%, 80% 50%, 85% 60%, 90% 70%, 95% 80%, 100% 100%)"></div>
                            </div>
                        </div>
                        <!-- Latest Posts Card -->
                        <div class="card p-6">
                            <p class="text-gray-600">Latest Posts</p>
                            <div class="space-y-4 mt-4">
                                <div>
                                    <p class="text-gray-800">The Power of Dream</p>
                                    <p class="text-sm text-gray-500">28 June 2021</p>
                                </div>
                                <div>
                                    <p class="text-gray-800">Emotional Healing</p>
                                    <p class="text-sm text-gray-500">22 June 2021</p>
                                </div>
                                <div>
                                    <p class="text-gray-800">Works vs School</p>
                                    <p class="text-sm text-gray-500">21 June 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main> --}}
            </div>
        </div>

        <!-- JavaScript for sidebar functionality -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const sidebar = document.getElementById('sidebar');
                const openSidebarBtn = document.getElementById('open-sidebar');
                const closeSidebarBtn = document.getElementById('close-sidebar');
                const overlay = document.getElementById('sidebar-overlay');

                // Open sidebar
                openSidebarBtn.addEventListener('click', function() {
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.remove('hidden');
                });

                // Close sidebar
                function closeSidebar() {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                }

                closeSidebarBtn.addEventListener('click', closeSidebar);
                overlay.addEventListener('click', closeSidebar);

                // Close sidebar when window is resized to desktop size
                window.addEventListener('resize', function() {
                    if (window.innerWidth >= 768) { // md breakpoint
                        overlay.classList.add('hidden');
                    }
                });
            });
        </script>
    </div>
</body>

</html>