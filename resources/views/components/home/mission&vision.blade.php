<div class="relative py-24 bg-gray-50 overflow-hidden">
    <!-- Background Grid Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(255,255,255,0.1)_1px,transparent_1px),linear-gradient(180deg,rgba(255,255,255,0.1)_1px,transparent_1px)] bg-[size:20px_20px] opacity-30"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl font-extrabold text-[#0575E6] mb-6 tracking-tight animate-zoomIn">Vision & Mission</h2>
            <p class="text-lg text-[#0575E6] max-w-3xl mx-auto animate-fadeIn" style="animation-delay: 0.4s;">
                Discover the driving force behind Ordecity’s commitment to transforming organizations across Africa and beyond.
            </p>
        </div>

        <!-- Content Section -->
        <div class="relative flex flex-col lg:flex-row items-center justify-between gap-12">
            <!-- Text Content -->
            <div class="lg:w-2/3 z-10">
                <!-- Vision Card -->
                <div class="relative bg-white rounded-2xl shadow-xl p-8 mb-8 border border-[#0575E6]/10 hover:shadow-2xl transition-all duration-300 animate-fadeIn" style="animation-delay: 0.6s;">
                    <div class="absolute -top-4 left-6 bg-[#0575E6] text-white px-4 py-1 rounded-full text-sm font-semibold shadow-md">
                        Vision
                    </div>
                    <h3 class="text-2xl font-semibold text-[#0575E6] mb-4 mt-4">Our Vision</h3>
                    <p class="text-gray-700 text-base leading-relaxed">
                        Empower organizations by fostering a culture of continuous learning and development through customized competency frameworks and innovative, systemic strategies that enhance individual and organizational effectiveness.
                    </p>
                </div>

                <!-- Mission Card -->
                <div class="relative bg-white rounded-2xl shadow-xl p-8 border border-[#0575E6]/10 hover:shadow-2xl transition-all duration-300 animate-fadeIn" style="animation-delay: 0.8s;">
                    <div class="absolute -top-4 left-6 bg-[#0575E6] text-white px-4 py-1 rounded-full text-sm font-semibold shadow-md">
                        Mission
                    </div>
                    <h3 class="text-2xl font-semibold text-[#0575E6] mb-4 mt-4">Our Mission</h3>
                    <p class="text-gray-700 text-base leading-relaxed">
                        To be the leading consulting firm renowned for redefining organizational development and employee growth, creating enduring value and sustainable success for African non-profits and businesses.
                    </p>
                </div>
            </div>

            <!-- Image -->
            <div class="md:w-1/3 flex justify-center">
                <img src="{{ asset('Images/vision-mission.png') }}" alt="Vision and Mission Illustration" class="w-full h-auto max-h-96 object-contain animate-fadeIn" style="animation-delay: 1.4s;" id="png-placeholder">
            </div>

            <!-- Image -->
            {{-- <div class="lg:w-1/3 flex justify-center relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl transform lg:-translate-x-12 animate-fadeIn" style="animation-delay: 1s;">
                    <img src="{{ asset('Images/vision-mission.png') }}" alt="Vision and Mission Illustration" class="w-full h-auto max-h-96 object-cover">
                    <div class="absolute inset-0 bg-[#0575E6]/10"></div>
                    <div class="absolute top-4 left-4 bg-white/80 backdrop-blur px-3 py-1 rounded-full text-xs font-medium text-[#0575E6]">
                        Inspiring Growth
                    </div>
                </div>
            </div> --}}
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