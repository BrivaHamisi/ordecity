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

    {{-- CKE Editor --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/45.2.0/ckeditor5.umd.js"></script> --}}

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
            /* Custom styles for wave background and rounded sidebar */
            .wave-bg {
                background: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"%3E%3Cpath fill="%23E0F7FA" fill-opacity="0.8" d="M0,128L48,138.7C96,149,192,171,288,186.7C384,203,480,213,576,202.7C672,192,768,160,864,149.3C960,139,1056,149,1152,170.7C1248,192,1344,224,1392,240L1440,256V320H0Z"%3E%3C/path%3E%3C/svg%3E');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: bottom;
                animation: waveAnimation 10s infinite ease-in-out;
            }

            @keyframes waveAnimation {
                0% {
                    background-position: 0 bottom;
                }

                50% {
                    background-position: 100px bottom;
                }

                100% {
                    background-position: 0 bottom;
                }
            }

            .card {
                background: rgba(255, 255, 255, 0.95);
                border-radius: 15px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
            }

            .rounded-left {
                border-top-left-radius: 20px;
                border-bottom-left-radius: 20px;
            }
        </style>
    @endif
</head>

<body class="font-sans antialiased bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="min-h-screen">
        <div class="flex min-h-screen">
            <!-- Left Sidebar/Navbar (collapsible) -->
            <div id="sidebar"
                class="fixed inset-y-0 left-0 z-30 w-64 bg-gradient-to-b from-[#1E90FF] to-[#00B7EB] text-white transition-transform duration-300 transform md:translate-x-0 -translate-x-full rounded-left shadow-2xl">
                <!-- Logo and Brand -->
                <div class="flex items-center justify-between p-4 border-b border-[#00B7EB]/30">
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-10 h-10 rounded-full bg-[#00B7EB]/30 flex items-center justify-center animate-pulse">
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
                    <a href="/dashboard"
                        class="{{ request()->is('dashboard') ? 'bg-gradient-to-r from-[#00B7EB] to-[#1E90FF] text-white' : 'text-white hover:bg-[#00B7EB]/50' }} flex items-center space-x-3 px-4 py-3 rounded-lg font-medium transition-all duration-300">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="/blogs"
                        class="{{ request()->is('blogs*') ? 'bg-gradient-to-r from-[#00B7EB] to-[#1E90FF] text-white' : 'text-white hover:bg-[#00B7EB]/50' }} flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-300">
                        <i class="fas fa-pen"></i>
                        <span>Posts</span>
                    </a>
                    <a href="/categories"
                        class="{{ request()->is('categories*') ? 'bg-gradient-to-r from-[#00B7EB] to-[#1E90FF] text-white' : 'text-white hover:bg-[#00B7EB]/50' }} flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-300">
                        <i class="fas fa-list"></i>
                        <span>Categories</span>
                    </a>
                    <a href="/users"
                        class="{{ request()->is('users*') ? 'bg-gradient-to-r from-[#00B7EB] to-[#1E90FF] text-white' : 'text-white hover:bg-[#00B7EB]/50' }} flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-300">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                    </a>
                    <a href="#"
                        class="{{ request()->is('media*') ? 'bg-gradient-to-r from-[#00B7EB] to-[#1E90FF] text-white' : 'text-white hover:bg-[#00B7EB]/50' }} flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-300">
                        <i class="fas fa-camera"></i>
                        <span>Media</span>
                    </a>
                    <a href="/profile"
                        class="{{ request()->is('settings*') ? 'bg-gradient-to-r from-[#00B7EB] to-[#1E90FF] text-white' : 'text-white hover:bg-[#00B7EB]/50' }} flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-300">
                        <i class="fas fa-cogs"></i>
                        <span>Profile Settings</span>
                    </a>
                    <a href="/user-guide"
                        class="{{ request()->is('guide*') ? 'bg-gradient-to-r from-[#00B7EB] to-[#1E90FF] text-white' : 'text-white hover:bg-[#00B7EB]/50' }} flex items-center space-x-3 px-4 py-3 rounded-lg font-medium mt-4 transition-all duration-300">
                        <i class="fas fa-book"></i>
                        <span>User Guide</span>
                    </a>
                </nav>

                <!-- Logout button -->
                <div class="p-4 mt-auto">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full py-2 px-4 bg-red-600 text-gray-300 rounded-lg hover:bg-[#FF8829]/20 transition-colors flex items-center justify-center hover:text-white">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </button>
                    </form>
                </div>
            </div>

            <!-- Overlay for sidebar on mobile -->
            <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden md:hidden"></div>

            <!-- Main content area (adjusted to accommodate sidebar) -->
            <div class="w-full md:ml-64 transition-all duration-300 flex flex-col">
                <!-- Header section -->
                <header class="bg-white shadow-lg border-b border-gray-100 sticky top-0 z-10">
                    <div class="px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
                        <!-- Menu button -->
                        <button id="open-sidebar" type="button"
                            class="md:hidden rounded-md p-2 text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#1E90FF]">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div class="flex items-center space-x-3 md:ml-0 ml-4">
                            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Dashboard</h1>
                            {{-- <p class="text-gray-500 text-sm">Home / Dashboard</p> --}}
                        </div>

                        <!-- User profile -->
                        <div class="flex items-center space-x-3 w-full sm:w-auto justify-end">
                            <div class="flex flex-col items-end">
                                <h3 class="font-medium text-gray-800 text-sm sm:text-base md:text-lg">Hello,
                                    {{ Auth::user()->name }}</h3>
                                <p class="text-gray-500 text-xs sm:text-sm">Admin</p>
                            </div>
                            <i
                                class="fas fa-user-circle text-[#1E90FF] text-xl sm:text-2xl md:text-3xl animate-pulse"></i>
                        </div>
                    </div>
                </header>

                <!-- Page Main Content -->
                <main class="flex-1 px-4 sm:px-6 lg:px-8 py-8">
                    {{ $slot }}
                </main>
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
