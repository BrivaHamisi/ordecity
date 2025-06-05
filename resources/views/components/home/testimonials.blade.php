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
                <h2 class="text-5xl font-bold text-[#0575E6] mb-6 tracking-tight animate-fade-in-up">What are our clients saying about us!</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto relative animate-fade-in-up">
                    Hear from our satisfied clients about their experiences with Ordecity.
                    <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-0.5 bg-[#0575E6]/30"></span>
                </p>
            </div>
        </div>

        <div class="relative overflow-hidden">
            <div class="carousel-container" style="overflow-x: hidden;">
                <div class="carousel-slide flex" style="transition: transform 0.5s ease-in-out; width: 100%;">
                    <!-- Card 1: Ashley Cooper -->
                    <div class="card flex-1 mr-6">
                        <div class="p-6 bg-[#e6f0fa] border border-gray-200 rounded-2xl shadow-md min-h-[300px] flex flex-col justify-between">
                            <div>
                                <p class="text-gray-800 text-base">
                                    While the company wishes they had more time to work out the kinks with the Teamollo, they are quite happy with the result of the project. The resulting website that the team developed is fast and the communication with the vender was very good. The company will work with them again.
                                </p>
                            </div>
                            <div class="flex items-center mt-4">
                                <img src="https://via.placeholder.com/50" alt="Ashley Cooper" class="w-12 h-12 rounded-full mr-4">
                                <div>
                                    <p class="text-gray-900 font-semibold text-sm">Ashley Cooper</p>
                                    <p class="text-gray-600 text-xs">Manager, Cooper Corp</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Anton de Swart -->
                    <div class="card flex-1 mr-6">
                        <div class="p-6 bg-[#e6f0fa] border border-gray-200 rounded-2xl shadow-md min-h-[300px] flex flex-col justify-between">
                            <div>
                                <p class="text-gray-800 text-base">
                                    Teamollo delivered the site within the timeline as they requested. In the end, the client found a 50% increase in traffic with in days since its launch. They also had an impressive ability to use technologies that the company hasn’t used, which have also proved to be easy to use and reliable.
                                </p>
                            </div>
                            <div class="flex items-center mt-4">
                                <img src="https://via.placeholder.com/50" alt="Anton de Swart" class="w-12 h-12 rounded-full mr-4">
                                <div>
                                    <p class="text-gray-900 font-semibold text-sm">Anton de Swart</p>
                                    <p class="text-gray-600 text-xs">CEO, Swart Enterprises</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Antonio Swart -->
                    <div class="card flex-1">
                        <div class="p-6 bg-[#e6f0fa] border border-gray-200 rounded-2xl shadow-md min-h-[300px] flex flex-col justify-between">
                            <div>
                                <p class="text-gray-800 text-base">
                                    Teamollo of owrk, our brand now has the image we were looking for - playful yet professional -nals. We have received positive from partners, the team, and our community to the new look of our Brand!
                                </p>
                            </div>
                            <div class="flex items-center mt-4">
                                <img src="https://via.placeholder.com/50" alt="Antonio Swart" class="w-12 h-12 rounded-full mr-4">
                                <div>
                                    <p class="text-gray-900 font-semibold text-sm">Antonio Swart</p>
                                    <p class="text-gray-600 text-xs">Designer, Swart Design</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Card for Toggle -->
                    <div class="card flex-1 mr-6 hidden">
                        <div class="p-6 bg-[#e6f0fa] border border-gray-200 rounded-2xl shadow-md min-h-[300px] flex flex-col justify-between">
                            <div>
                                <p class="text-gray-800 text-base">More testimonials are available to explore...</p>
                            </div>
                            <div class="flex items-center mt-4">
                                <img src="https://via.placeholder.com/50" alt="Extra Person" class="w-12 h-12 rounded-full mr-4">
                                <div>
                                    <p class="text-gray-900 font-semibold text-sm">Extra Person</p>
                                    <p class="text-gray-600 text-xs">Role, Company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Toggle Notification and Buttons -->
            <div class="text-center mt-8">
                <p class="text-gray-600 text-sm mb-2">Toggle to see more testimonials</p>
                <div class="flex justify-center space-x-4">
                    <button class="toggle-button bg-gray-200 border border-gray-300 rounded-md px-2 py-1 text-gray-700 flex items-center space-x-1 hover:bg-gray-300 transition-colors duration-200" onclick="moveSlide(-1)">
                        <i class="fas fa-chevron-left text-sm"></i>
                    </button>
                    <button class="toggle-button bg-gray-200 border border-gray-300 rounded-md px-2 py-1 text-gray-700 flex items-center space-x-1 hover:bg-gray-300 transition-colors duration-200" onclick="moveSlide(1)">
                        <i class="fas fa-chevron-right text-sm"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const carouselSlide = document.querySelector('.carousel-slide');
        let currentIndex = 0;
        const totalCards = 3; // Display 3 cards at a time
        const cardWidth = 400; // Approximate card width

        function moveSlide(direction) {
            currentIndex = (currentIndex + direction + Math.ceil(carouselSlide.children.length / totalCards)) % Math.ceil(carouselSlide.children.length / totalCards);
            const translateX = -currentIndex * (cardWidth * totalCards);
            carouselSlide.style.transform = `translateX(${translateX}px)`;
            // Show/hide additional card based on index
            const additionalCard = carouselSlide.querySelector('.card.hidden');
            if (currentIndex > 0) {
                additionalCard.classList.remove('hidden');
                carouselSlide.style.width = `${(carouselSlide.children.length) * cardWidth}px`;
            } else {
                additionalCard.classList.add('hidden');
                carouselSlide.style.width = `${(carouselSlide.children.length - 1) * cardWidth}px`;
            }
        }

        // Ensure 3 cards are visible initially
        carouselSlide.style.width = `${(carouselSlide.children.length - 1) * cardWidth}px`;
    </script>
</div>