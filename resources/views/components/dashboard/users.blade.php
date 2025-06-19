<x-app-layout>
<div class="mb-8">
    <div class="flex items-center space-x-2 mb-2">
        <div class="w-6 h-1 bg-[#1E90FF]/60 rounded-full"></div>
        <div class="text-[#00B7EB] text-sm font-medium tracking-wider">USER MANAGEMENT</div>
    </div>
    <h2 class="text-3xl font-bold text-gray-800">User Dashboard</h2>
    <p class="text-gray-600 mt-1">Manage and monitor user activities on xLAB Diagnostics.</p>
</div>

<div class="bg-white rounded-xl shadow-md border border-gray-100 p-6">
    <div class="md:py-1 min-h-screen">
        <div class="w-full">
            <!-- Decorative background patterns -->
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute -left-32 top-1/4 w-64 h-64 rounded-full bg-gradient-to-r from-[#1E90FF]/10 to-transparent blur-3xl"></div>
                <div class="absolute right-1/4 bottom-1/4 w-96 h-96 rounded-full bg-[#1E90FF]/5 blur-3xl"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- User Management Section with Enhanced Design -->
                <div class="md:col-span-2 rounded-xl">
                    <div class="px-4 sm:px-6 py-4 sm:py-5 bg-gradient-to-r from-[#1E90FF]/10 to-[#1E90FF]/5">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <h3 class="text-lg sm:text-xl font-semibold text-gray-800 flex items-center">
                                <div class="w-8 h-8 rounded-full bg-[#1E90FF]/20 flex items-center justify-center mr-3">
                                    <i class="fas fa-users text-[#00B7EB] text-sm"></i>
                                </div>
                                {{ __('User Management') }}
                            </h3>
                            
                            <!-- Responsive search and add controls -->
                            <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                                <input type="text" placeholder="Search users..." class="form-input w-full sm:w-64 rounded-lg border-gray-300 text-sm 
                                    focus:ring-2 focus:ring-[#1E90FF]/50 focus:border-[#1E90FF] 
                                    transition duration-300 ease-in-out shadow-sm">
                                <button class="px-4 py-2 bg-[#1E90FF] text-white rounded-lg w-full sm:w-auto
                                    hover:shadow-2xl transition-all duration-300 overflow-hidden relative group">
                                    <div class="absolute inset-0 bg-white/20 opacity-0 group-hover:opacity-100 transform -translate-x-full group-hover:translate-x-0 transition-all duration-300"></div>
                                    <span class="relative flex items-center justify-center gap-2">
                                        {{ __('Add User') }}
                                        <i class="fas fa-plus transition-transform group-hover:translate-x-1"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- User Table with Responsive Design -->
                    <div class="overflow-x-auto">
                        <!-- For larger screens - Full table -->
                        <table class="w-full hidden sm:table">
                            <thead class="bg-gray-50">
                                <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <th class="px-4 sm:px-6 py-3 text-left">#</th>
                                    <th class="px-4 sm:px-6 py-3">{{ __('Name') }}</th>
                                    <th class="px-4 sm:px-6 py-3">{{ __('Email') }}</th>
                                    <th class="px-4 sm:px-6 py-3">{{ __('Joined') }}</th>
                                    <th class="px-4 sm:px-6 py-3 text-right">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach($users as $user)
                                    <tr class="hover:bg-[#1E90FF]/10 transition duration-150 ease-in-out">
                                        <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $user->id }}
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10 mr-4">
                                                    <div class="h-10 w-10 rounded-full bg-[#1E90FF]/20 flex items-center justify-center text-[#00B7EB] font-bold">
                                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $user->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $user->email }}
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $user->created_at->format('M d, Y') }}
                                        </td>
                                        <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-right">
                                            <div class="flex justify-end space-x-3">
                                                <a href="#" class="text-[#00B7EB] hover:text-[#FF8829] transition duration-300 ease-in-out">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                                <a href="#" class="text-[#00B7EB] hover:text-[#FF8829] transition duration-300 ease-in-out">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                                <a href="#" class="text-[#00B7EB] hover:text-[#FF8829] transition duration-300 ease-in-out">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- For mobile screens - Card-style list -->
                        <div class="sm:hidden divide-y divide-gray-100">
                            @foreach($users as $user)
                                <div class="px-4 py-4 hover:bg-[#1E90FF]/10 transition duration-150 ease-in-out">
                                    <div class="flex items-center justify-between mb-2">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 rounded-full bg-[#1E90FF]/20 flex items-center justify-center text-[#00B7EB] font-bold mr-3">
                                                {{ strtoupper(substr($user->name, 0, 1)) }}
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                                <div class="text-xs text-gray-500">ID: {{ $user->id }}</div>
                                            </div>
                                        </div>
                                        <div class="flex space-x-2">
                                            <a href="#" class="text-[#00B7EB] hover:text-[#FF8829] transition duration-300 ease-in-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            <a href="#" class="text-[#00B7EB] hover:text-[#FF8829] transition duration-300 ease-in-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            <a href="#" class="text-[#00B7EB] hover:text-[#FF8829] transition duration-300 ease-in-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-sm text-gray-500 mb-1">{{ $user->email }}</div>
                                    <div class="text-xs text-gray-500">Joined: {{ $user->created_at->format('M d, Y') }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Pagination -->
                    @if($users->hasPages())
                    <div class="px-4 py-3 border-t border-gray-100 sm:px-6">
                        {{ $users->links() }}
                    </div>
                    @endif
                </div>

                <!-- Sidebar with Enhanced Design -->
                <div class="space-y-6">
                    <!-- Recent Activity Card with Modern Design -->
                    <div class="rounded-xl p-4 sm:p-6">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800 
                            flex items-center">
                            <div class="w-8 h-8 rounded-full bg-[#1E90FF]/20 flex items-center justify-center mr-3">
                                <i class="fas fa-bell text-[#00B7EB] text-sm"></i>
                            </div>
                            Recent Activity
                        </h3>

                        <ul class="space-y-4">
                            <li class="flex items-center space-x-3">
                                <div class="flex-shrink-0 h-8 w-8 rounded-full bg-[#1E90FF]/20 flex items-center justify-center text-[#00B7EB]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        New user registration
                                    </p>
                                    <p class="text-xs text-gray-500 truncate">
                                        John Doe signed up 10 mins ago
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500">Just now</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <div class="flex-shrink-0 h-8 w-8 rounded-full bg-[#1E90FF]/20 flex items-center justify-center text-[#00B7EB]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.766A2.25 2.25 0 008.828 17h2.344a2.25 2.25 0 001.789-.894l2.395-3.189a2 2 0 00.346-1.244V9.997a2 2 0 00-2-2h-1z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        Profile update
                                    </p>
                                    <p class="text-xs text-gray-500 truncate">
                                        Jane Smith updated profile details
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500">30 mins</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <div class="flex-shrink-0 h-8 w-8 rounded-full bg-[#1E90FF]/20 flex items-center justify-center text-[#00B7EB]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        Account deactivated
                                    </p>
                                    <p class="text-xs text-gray-500 truncate">
                                        User Mike Johnson deactivated
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500">2 hrs</span>
                            </li>
                        </ul>
                    </div>

                    <!-- User Growth Chart - Responsive -->
                    <div class="rounded-xl p-4 sm:p-6">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800 flex items-center">
                            <div class="w-8 h-8 rounded-full bg-[#1E90FF]/20 flex items-center justify-center mr-3">
                                <i class="fas fa-chart-line text-[#00B7EB] text-sm"></i>
                            </div>
                            User Growth
                        </h3>
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                            <div class="mb-2 sm:mb-0">
                                <p class="text-sm text-gray-500">Last 30 Days</p>
                                <p class="text-2xl font-bold text-[#00B7EB]">+{{ \App\Models\User::where('created_at', '>', now()->subDays(30))->count() }} Users</p>
                            </div>
                            <div class="text-left sm:text-right">
                                <span class="text-[#00B7EB] text-sm inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                    12.5%
                                </span>
                            </div>
                        </div>
                        <div class="h-48 w-full bg-[#1E90FF]/10 rounded-lg flex items-center justify-center">
                            <canvas id="growthChart"></canvas>
                        </div>
                    </div>

                    <!-- User Roles Distribution - Responsive -->
                    <div class="rounded-xl p-4 sm:p-6">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800 flex items-center">
                            <div class="w-8 h-8 rounded-full bg-[#1E90FF]/20 flex items-center justify-center mr-3">
                                <i class="fas fa-users-cog text-[#00B7EB] text-sm"></i>
                            </div>
                            User Roles
                        </h3>
                        <!-- For larger screens -->
                        <div class="hidden sm:block space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <span class="h-3 w-3 rounded-full bg-[#1E90FF]"></span>
                                    <span class="text-sm text-gray-700">Admin</span>
                                </div>
                                <span class="text-sm font-medium text-gray-900">5</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <span class="h-3 w-3 rounded-full bg-[#1E90FF]/80"></span>
                                    <span class="text-sm text-gray-700">Editor</span>
                                </div>
                                <span class="text-sm font-medium text-gray-900">12</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <span class="h-3 w-3 rounded-full bg-[#1E90FF]/60"></span>
                                    <span class="text-sm text-gray-700">User</span>
                                </div>
                                <span class="text-sm font-medium text-gray-900">48</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <span class="h-3 w-3 rounded-full bg-[#1E90FF]/40"></span> 
                                    <span class="text-sm text-gray-700">Guest</span>
                                </div>
                                <span class="text-sm font-medium text-gray-900">24</span>
                            </div>
                        </div>
                        
                        <!-- For mobile - Grid layout -->
                        <div class="grid grid-cols-2 gap-3 sm:hidden">
                            <div class="bg-[#1E90FF]/10 rounded-lg p-3 text-center">
                                <div class="mx-auto h-3 w-3 rounded-full bg-[#1E90FF] mb-2"></div>
                                <p class="text-sm text-gray-700">Admin</p>
                                <p class="text-sm font-medium text-gray-900">5</p>
                            </div>
                            <div class="bg-[#1E90FF]/10 rounded-lg p-3 text-center">
                                <div class="mx-auto h-3 w-3 rounded-full bg-[#1E90FF]/80 mb-2"></div>
                                <p class="text-sm text-gray-700">Editor</p>
                                <p class="text-sm font-medium text-gray-900">12</p>
                            </div>
                            <div class="bg-[#1E90FF]/10 rounded-lg p-3 text-center">
                                <div class="mx-auto h-3 w-3 rounded-full bg-[#1E90FF]/60 mb-2"></div>
                                <p class="text-sm text-gray-700">User</p>
                                <p class="text-sm font-medium text-gray-900">48</p>
                            </div>
                            <div class="bg-[#1E90FF]/10 rounded-lg p-3 text-center">
                                <div class="mx-auto h-3 w-3 rounded-full bg-[#1E90FF]/40 mb-2"></div>
                                <p class="text-sm text-gray-700">Guest</p>
                                <p class="text-sm font-medium text-gray-900">24</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('growthChart').getContext('2d');

            // Create gradient for area under the line
            const gradient = ctx.createLinearGradient(0, 0, 0, 250);
            gradient.addColorStop(0, 'rgba(30, 144, 255, 0.5)');
            gradient.addColorStop(1, 'rgba(30, 144, 255, 0.0)');

            // Simulated data - Replace with actual data passed from your Laravel controller
            const labels = ['Week 1', 'Week 2', 'Week 3', 'Week 4'];
            const data = [50, 75, 100, 125]; 

            const growthChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'New Users',
                        data: data, 
                        backgroundColor: gradient,
                        borderColor: 'rgb(30, 144, 255)', 
                        borderWidth: 2, 
                        pointBackgroundColor: 'white',
                        pointBorderColor: 'rgb(30, 144, 255)',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            beginAtZero: true,
                            grid: {
                                borderDash: [5, 5],
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        }
                    }
                }
            });
        });
    </script>
</div>
</x-app-layout>

