<div class="relative py-24 bg-gray-50 overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle,#0575E6_1px,transparent_1px)] opacity-5"></div>
    <div class="absolute inset-0 bg-[#e6f0fa]/20"></div>

    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <div class="relative">
                 <h2 class="text-4xl sm:text-5xl font-extrabold text-[#0575E6] mb-6 tracking-tight animate-zoomIn"> Meet Our Team</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto relative animate-fade-in-up">
                    We focus on the details of everything we do. All to help businesses around the world focus on what's most important to them.
                    <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-28 h-0.5 bg-[#0575E6]/30"></span>
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Team Member 1: Paul K. Ndungu -->
            <div class="p-6 bg-white/90 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 animate-fade-in-up cursor-pointer" onclick="openModal('paul')">
                <img src="{{ asset('images/paul.png') }}" alt="Paul K. Ndungu" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl md:text-2xl font-semibold text-[#0575E6] mb-2">Paul K. Ndungu</h3>
                <p class="text-gray-700 text-sm md:text-base mb-1">Founder and Managing Director, Project and Management expert</p>
                <p class="text-gray-500 text-xs">Enjoys adventurous travel, seeks new cultures and offbeat destinations</p>
            </div>

            <!-- Team Member 2: Mulika Mutuku -->
            <div class="p-6 bg-white/90 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 animate-fade-in-up cursor-pointer" onclick="openModal('mulika')">
                <img src="{{ asset('images/mulika-new.jpg') }}" alt="Mulika Mutuku" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl md:text-2xl font-semibold text-[#0575E6] mb-2">Mulika Mutuku</h3>
                <p class="text-gray-700 text-sm md:text-base mb-1">Associate Director</p>
                <p class="text-gray-500 text-xs">Pop music lover, seeks joy and exciting pop concerts</p>
            </div>
        </div>

        <!-- Modal -->
        <div id="teamModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg max-w-md w-full mx-4 animate-fade-in-up">
                <h3 id="modalTitle" class="text-2xl font-semibold text-[#0575E6] mb-4"></h3>
                <p id="modalRole" class="text-gray-700 text-base mb-2"></p>
                <p id="modalDescription" class="text-gray-700 text-base mb-4"></p>
                <button onclick="closeModal()" class="bg-[#0575E6] text-white px-4 py-2 rounded hover:bg-[#045dc1] transition-colors duration-300">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function openModal(person) {
        const modal = document.getElementById('teamModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalRole = document.getElementById('modalRole');
        const modalDescription = document.getElementById('modalDescription');

        if (person === 'paul') {
            modalTitle.textContent = 'Paul K. Ndungu';
            modalRole.textContent = 'Founder and Managing Director, Project and Management expert';
            modalDescription.textContent = 'n integrated Organizational Development Champion, Learning and Development Strategist, and learning facilitator with 25 years of experience in the INGO Sector project management and people development. I help organizations develop innovative, systematic programs for staff capacity building and facilitating learning by helping them develop high-impact programs based on the competencies that their business needs most for effectiveness. Some of my main areas of expertise are the development of custom competency frameworks, designing organizational systems based on the frameworks, and facilitating learning by applying effective adult learning principles and practices. Some organizations I have done this for include Swisscontact, Gatsby Africa, TechnoServe, Mercy Corps, and FOCUS Kenya. Education: BSc, MBA-Entrepreneurship, and DBA underway. Professional Qualifications: Coaching Skills for Managers (CSM), Project Management Professional (PMP Pro.), Making Markets Work for the Poor (M4P), Accelerated Learning.';
        } else if (person === 'mulika') {
            modalTitle.textContent = 'Mulika Mutuku';
            modalRole.textContent = 'Associate Director';
            modalDescription.textContent = 'Brief Bio: I am an expert in behavioral aspects of productivity and systems thinking. I’ve spent over 10 years working with all kinds of clients—like Safaricom, PWC, and Tata Chemicals, to name a few—plus nonprofits and startups. Through that time, I’ve devised a way of working that combines understanding what makes people tick with figuring out how systems operate.I’m convinced that if you want to boost productivity and make changes that last, you’ve got to pay attention to both the people and the processes. That’s why I dig into things like habits, motivation, and how teams work together, while also looking at the bigger picture of how everything in an organization connects. When I team up with leaders and groups, we roll up our sleeves and get into what’s going well and what’s not. From there, we build solutions that make sense and can stick around for the long haul. Education: BA-Psychology Professional Courses: L4G | The Leadership Circle | Faith Driven Entrepreneurship.';
        }

        modal.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('teamModal');
        modal.classList.add('hidden');
    }

    // Close modal when clicking outside
    document.getElementById('teamModal').addEventListener('click', function(e) {
        if (e.target === this) closeModal();
    });
</script>