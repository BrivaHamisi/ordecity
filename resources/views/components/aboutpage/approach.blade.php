<div class="relative py-24 bg-gray-50 overflow-hidden">
    <!-- Background Grid Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(255,255,255,0.1)_1px,transparent_1px),linear-gradient(180deg,rgba(255,255,255,0.1)_1px,transparent_1px)] bg-[size:20px_20px] opacity-30"></div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl font-extrabold text-[#0575E6] mb-6 tracking-tight animate-zoomIn">Our Approach</h2>
            <p class="text-lg text-[#0575E6] max-w-3xl mx-auto relative animate-fadeIn" style="animation-delay: 0.4s;">
                Learn how we drive organizational success.
                <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-0.5 bg-[#0575E6]/30"></span>
            </p>
        </div>

        <!-- Content Section -->
        <div class="p-6 animate-fadeIn" style="animation-delay: 0.6s;">
            <div class="inline-flex items-center mb-4">
                <span class="bg-[#0575E6] text-white px-4 py-1 rounded-full text-sm font-semibold shadow-md">Our Method</span>
            </div>
            <p class="text-gray-700 text-base leading-relaxed">
                We collaborate with leaders to develop tailored competency frameworks from their organizational strategic plans and goals, then help them build actionable systematic organizational and employee development initiatives based on the custom frameworks. This ensures that investments in organizational development and employee growth target the most critical areas for overall organizational effectiveness.
            </p>
        </div>
    </div>

    <!-- Inline Styles for Animations -->
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 1s ease-out forwards;
        }
        @keyframes zoomIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        .animate-zoomIn {
            animation: zoomIn 1s ease-out forwards;
        }
    </style>
</div>