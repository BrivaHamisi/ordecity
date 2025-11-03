<div class="relative py-32 bg-gradient-to-b from-gray-50 via-white to-gray-50 overflow-hidden">
    <!-- Animated Background Pattern -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Subtle Moving Grid -->
        <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(5,117,230,0.03)_1px,transparent_1px),linear-gradient(180deg,rgba(5,117,230,0.03)_1px,transparent_1px)] bg-[size:40px_40px] animate-slideGrid"></div>
        
        <!-- Floating Orbs -->
        <div class="absolute top-10 -left-20 w-72 h-72 bg-[#0575E6]/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 -right-20 w-80 h-80 bg-indigo-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 1.5s;"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-6 sm:px-8 lg:px-10">
        <!-- Header -->
        <div class="text-center mb-20">
            <h2 class="text-5xl sm:text-6xl font-bold text-[#0575E6] mb-6 tracking-tight">
                Our Approach
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                We align employee growth with organizational strategy — so every investment delivers measurable impact.
            </p>
            <div class="mt-6 h-1 w-24 bg-gradient-to-r from-[#0575E6] to-[#045BB5] mx-auto rounded-full"></div>
        </div>

        <!-- Main Content – Glassmorphic Card -->
        <div class="relative bg-white/70 backdrop-blur-xl rounded-3xl shadow-xl p-10 md:p-14 border border-white/30 ring-1 ring-[#0575E6]/10">
            <!-- Badge -->
            <div class="inline-flex mb-8">
                <span class="px-5 py-2 bg-gradient-to-r from-[#0575E6] to-[#045BB5] text-white text-sm font-semibold rounded-full shadow-md">
                    Our Method
                </span>
            </div>

            <!-- Core Description -->
            <p class="text-lg text-gray-700 leading-relaxed mb-12">
                We collaborate with leaders to develop <span class="font-semibold text-[#0575E6]">tailored competency frameworks</span> from their organizational strategic plans and goals, then help them build <span class="font-semibold text-[#0575E6]">actionable systematic organizational and employee development initiatives</span> based on the custom frameworks.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed">
                This ensures that investments in organizational development and employee growth <span class="font-semibold text-[#0575E6]">target the most critical areas for overall organizational effectiveness</span>.
            </p>
        </div>

        <!-- ROI Insight – Glassmorphic Callout -->
        <div class="mt-16 relative bg-white/60 backdrop-blur-lg rounded-2xl p-10 border border-white/40 ring-1 ring-[#0575E6]/20 shadow-lg">
            <div class="flex items-start gap-5">
                <div class="flex-shrink-0 w-12 h-12 bg-[#0575E6] rounded-full flex items-center justify-center shadow-md">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        What can I do to stop being asked to demonstrate the ROI of employee development investments?
                    </h3>
                    <p class="text-lg font-semibold text-[#0575E6]">
                        Focus employee development on the most critical behaviors — and the ROI will be <span class="underline decoration-wavy decoration-[#0575E6]/50">self-evident</span>.
                    </p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        {{-- <div class="text-center mt-16">
            <a href="/contact" class="inline-flex items-center px-8 py-4 bg-[#0575E6] text-white font-semibold text-lg rounded-full shadow-lg hover:shadow-xl hover:bg-[#045BB5] transform hover:scale-105 transition-all duration-300">
                Start Your Transformation
                <svg class="ml-3 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div> --}}
    </div>

    <!-- Custom Animations -->
    <style>
        @keyframes slideGrid {
            0% { transform: translateX(0) translateY(0); }
            100% { transform: translateX(40px) translateY(40px); }
        }
        .animate-slideGrid {
            animation: slideGrid 40s linear infinite;
        }
    </style>
</div>