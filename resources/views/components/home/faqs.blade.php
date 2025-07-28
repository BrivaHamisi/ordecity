<div class="relative py-24 bg-gray-50 overflow-hidden">
    <!-- Background Grid Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(255,255,255,0.1)_1px,transparent_1px),linear-gradient(180deg,rgba(255,255,255,0.1)_1px,transparent_1px)] bg-[size:20px_20px] opacity-30"></div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl font-extrabold text-[#0575E6] mb-6 tracking-tight animate-zoomIn">Frequently Asked Questions</h2>
            <p class="text-lg text-[#0575E6] max-w-3xl mx-auto animate-fadeIn" style="animation-delay: 0.4s;">
                Find answers to common questions about how Ordecity can empower your organization.
            </p>
        </div>

        <!-- FAQ Items -->
        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="faq-item bg-gradient-to-r from-[#E6F0FA] to-[#A3CFFF] rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl animate-fadeIn" style="animation-delay: 0.6s;">
                <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-[#0575E6]/10 transition-colors duration-200" onclick="toggleAnswer(this)">
                    <span class="text-gray-900 font-semibold text-lg">What services does Ordecity provide?</span>
                    <svg class="faq-icon h-5 w-5 text-[#0575E6] transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-answer hidden p-6 pt-0 text-gray-800 text-base bg-white">
                    Ordecity offers a range of services including organizational development, competency frameworks, leadership training, and digital transformation solutions tailored to your business needs.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item bg-gradient-to-r from-[#E6F0FA] to-[#A3CFFF] rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl animate-fadeIn" style="animation-delay: 0.8s;">
                <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-[#0575E6]/10 transition-colors duration-200" onclick="toggleAnswer(this)">
                    <span class="text-gray-900 font-semibold text-lg">How can I get started with Ordecity?</span>
                    <svg class="faq-icon h-5 w-5 text-[#0575E6] transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width ="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-answer hidden p-6 pt-0 text-gray-800 text-base bg-white">
                    Getting started is simple! Reach out via our website’s contact form, and our team will schedule a consultation to discuss your goals and next steps.
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item bg-gradient-to-r from-[#E6F0FA] to-[#A3CFFF] rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl animate-fadeIn" style="animation-delay: 1s;">
                <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-[#0575E6]/10 transition-colors duration-200" onclick="toggleAnswer(this)">
                    <span class="text-gray-900 font-semibold text-lg">What is the typical timeline for a project?</span>
                    <svg class="faq-icon h-5 w-5 text-[#0575E6] transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-answer hidden p-6 pt-0 text-gray-800 text-base bg-white">
                    Project timelines depend on scope. For example, a competency framework development project typically takes 6 to 12 weeks, with a detailed timeline provided during our initial consultation.
                </div>
            </div>
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

    <!-- JavaScript for FAQ Toggle -->
    <script>
        function toggleAnswer(button) {
            const answer = button.nextElementSibling;
            const icon = button.querySelector('.faq-icon');
            const isOpen = !answer.classList.contains('hidden');

            // Close all other answers
            document.querySelectorAll('.faq-answer').forEach(item => {
                item.classList.add('hidden');
                item.previousElementSibling.querySelector('.faq-icon').classList.remove('rotate-180');
            });

            // Toggle the clicked answer
            if (isOpen) {
                answer.classList.add('hidden');
                icon.classList.remove('rotate-180');
            } else {
                answer.classList.remove('hidden');
                icon.classList.add('rotate-180');
            }
        }
    </script>
</div>