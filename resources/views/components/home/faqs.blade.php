<div class="relative py-24 bg-gray-50 overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle,#0575E6_1px,transparent_1px)] opacity-5"></div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="relative">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#0575E6] animate-fade-in-up" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l7-2 7 2v6c0 5-3 9-7 10-4-1-7-5-7-10V3z" />
                    </svg>
                </div>
                <h2 class="text-5xl font-bold text-[#0575E6] mb-6 tracking-tight animate-fade-in-up">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto relative animate-fade-in-up">
                    Find answers to common questions about Ordecity.
                    <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-0.5 bg-[#0575E6]/30"></span>
                </p>
            </div>
        </div>

        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="faq-item bg-[#e6f0fa] border border-gray-200 rounded-2xl shadow-md">
                <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition-colors duration-200" onclick="toggleAnswer(this)">
                    <span class="text-gray-900 font-semibold text-lg">What services does Ordecity provide?</span>
                    <svg class="faq-icon h-5 w-5 text-[#0575E6] transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-answer hidden p-6 pt-0 text-gray-800 text-base">
                    Ordecity offers a range of services including web development, digital marketing, and branding solutions tailored to your business needs.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item bg-[#e6f0fa] border border-gray-200 rounded-2xl shadow-md">
                <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition-colors duration-200" onclick="toggleAnswer(this)">
                    <span class="text-gray-900 font-semibold text-lg">How can I get started with Ordecity?</span>
                    <svg class="faq-icon h-5 w-5 text-[#0575E6] transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-answer hidden p-6 pt-0 text-gray-800 text-base">
                    Getting started is easy! Contact us through our website, and our team will reach out to discuss your project requirements and next steps.
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item bg-[#e6f0fa] border border-gray-200 rounded-2xl shadow-md">
                <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition-colors duration-200" onclick="toggleAnswer(this)">
                    <span class="text-gray-900 font-semibold text-lg">What is the typical timeline for a project?</span>
                    <svg class="faq-icon h-5 w-5 text-[#0575E6] transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-answer hidden p-6 pt-0 text-gray-800 text-base">
                    Project timelines vary depending on the scope. A typical web development project can take anywhere from 4 to 12 weeks, but we’ll provide a detailed timeline during our initial consultation.
                </div>
            </div>
        </div>
    </div>

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