@php
    use Illuminate\Support\Str;
@endphp

<div class="relative py-32 bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 overflow-hidden">
    <!-- Animated Background Orbs -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#0575E6]/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute top-1/3 -right-32 w-80 h-80 bg-purple-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1.5s;"></div>
        <div class="absolute bottom-0 left-1/2 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 3s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header with BRAND COLORS -->
        <div class="text-center mb-24">
            <h2 class="text-5xl sm:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-[#0575E6] to-[#045BB5] mb-6 tracking-tight opacity-0 translate-y-10 animate-slideUp">
                Our Services
            </h2>
            <p class="text-xl text-slate-600 max-w-4xl mx-auto opacity-0 translate-y-10 animate-slideUp" style="animation-delay: 0.3s;">
                Strategic. Human-centered. Impact-driven. We don’t just consult — we <span class="text-[#0575E6] font-bold">transform</span>.
            </p>
        </div>

        <!-- Services -->
        <div class="space-y-24" x-data="{ open: null }">
            @php
                $services = [
                    [
                        'title' => 'Custom Competency Frameworks',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5 2a9 9 0 11-18 0 9 9 0 0118 0z" />',
                        'badge' => 'Core Service',
                        'short' => 'We develop tailored competency frameworks that align with your strategic goals, forming the foundation for effective staff and organizational development.',
                        'long' => "At Ordecity, we believe that competency frameworks should do more than define roles—they should inspire growth, clarify purpose, and align with organizational strategy. Our custom-built frameworks are co-created with clients to reflect their unique culture, values, and mission. Whether you're a nonprofit scaling impact or a business navigating transformation, we design tools that enable you to empower your teams to thrive with clarity and confidence.\n\nWe go beyond templates and jargon. Our approach integrates participatory design, behavioral insights, and strategic foresight to ensure prioritization of the most critical competencies, and then co-develop actionable, measurable, and feasible action plans to your team to grow its capacity for high performance. From leadership development to frontline performance, our frameworks-based organization development programs become living systems—guiding recruitment, training, performance reviews, and succession planning with integrity and impact.",
                    ],
                    [
                        'title' => 'Strategic Organizational Development (OD)',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0H5m14 0a2 2 0 002-2v-2m-2 2H7m0-2v2m10-8H7m10 4H7"/>',
                        'badge' => 'Transformation',
                        'short' => 'Ordecity’s OD support and services are built for leaders who want more than incremental improvement—they want transformation.',
                        'long' => "We help organizations diagnose systemic challenges, unlock latent potential, and design interventions that are both human-centered and strategically sound. Whether you're restructuring, scaling, or reimagining your mission, we guide you through the complexity with clarity and care.\n\nOur OD process is deeply collaborative. We blend systems thinking, appreciative inquiry, and data-driven analysis to co-create solutions that stick. From culture audits to strategic retreats, we help teams align around purpose, build trust, and move forward with renewed energy. Every engagement is tailored to your context, ensuring that change is not just sustainable—but deeply meaningful.",
                    ],
                    [
                        'title' => 'Systemic Staff Development Programs and Strategies',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>',
                        'badge' => 'Core Service',
                        'short' => 'We implement comprehensive employee competency frameworks to ensure focused, structured, and measurable growth for staff at all levels.',
                        'long' => "At Ordecity, we help organizations build staff development programs that are rooted in their competency frameworks—ensuring strategic alignment from the start. We design participatory strategies that empower individuals to take ownership of their growth, while reflecting your mission, operational realities, and long-term goals. Grounded in adult learning principles and tailored to your teams’ lived experiences, our programs support measurable progress across technical, behavioral, and leadership domains. Development becomes continuous and relevant—without requiring constant oversight.\n\nInstead of relying on leadership to drive every learning initiative, we help embed self-directed development into the organization’s DNA. Through reflective tools, peer learning structures, and policy-aligned reinforcement mechanisms, growth becomes part of everyday practice. Each program is scalable, adaptable, and designed to reduce the leadership burden—ensuring that staff development is not only systemic and sustainable, but quietly powerful in its momentum.",
                    ],
                    [
                        'title' => 'Dialogues for Learning and Strategy',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M9 16h.01M13 16h.01M7 20h10a2 2 0 002-2V6a2 2 0 00-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2z"/>',
                        'badge' => 'Core Service',
                        'short' => 'We facilitate strategic thinking through collective learning dialogues at project start, mid-point for monitoring, or end for reflection and growth.',
                        'long' => "At Ordecity, we believe strategy is not a solo act—it’s a shared journey. Our facilitated learning dialogues create space for teams to pause, reflect, and realign at critical project moments: the beginning, midpoint, and close. These sessions are more than check-ins—they’re structured conversations that surface insights, challenge assumptions, and build collective ownership. Whether launching a new initiative or evaluating progress, we help organizations think together, learn together, and move forward with clarity.\n\nOur approach blends strategic facilitation with participatory methods, ensuring every voice is heard and every insight is valued. We use tools like appreciative inquiry, systems mapping, and storytelling to unlock deeper understanding and foster alignment. These dialogues often become turning points—moments where teams reconnect with purpose, recalibrate direction, and recommit to impact. It’s strategy with soul, designed to strengthen both outcomes and relationships.",
                    ],
                    [
                        'title' => 'Supporting Organizational Change',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>',
                        'badge' => 'Core Service',
                        'short' => 'We employ change management techniques to support organizations, ensuring a smooth, paced, and effective transition during transformation.',
                        'long' => "We employ change management techniques to support organizations through complex transitions, ensuring that each step is smooth, paced, and purposefully aligned with their mission. Our approach recognizes that organizational change is never purely technical—it is also deeply cultural and political.\n\nWe work with leadership and teams to navigate not only the systems and structures that need redesigning, but also the underlying beliefs, power dynamics, and stakeholder interests that shape how change is received and sustained, employing both classical and modern change management models and frameworks.",
                    ],
                ];
            @endphp

            @foreach($services as $index => $service)
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center opacity-0 translate-y-10"
                     style="animation: slideUp 0.8s ease-out forwards; animation-delay: {{ ($index * 0.2) }}s;">

                    <!-- Text -->
                    <div class="{{ $index % 2 === 0 ? 'lg:order-1' : 'lg:order-2' }} space-y-6">
                        <div class="flex items-center gap-3">
                            <span class="px-4 py-1.5 text-xs font-bold text-white bg-gradient-to-r from-[#0575E6] to-[#045BB5] rounded-full shadow-lg">
                                {{ $service['badge'] }}
                            </span>
                        </div>

                        <h3 class="text-3xl md:text-4xl font-extrabold  text-[#0575E6] leading-tight">
                            {{ $service['title'] }}
                        </h3>

                        <p class="text-lg text-slate-600 leading-relaxed">
                            {{ $service['short'] }}
                        </p>

                        <!-- Read More -->
                        <div x-cloak>
                            <div x-show="open === {{ $index }}"
                                 x-transition:enter="transition ease-out duration-500"
                                 x-transition:enter-start="opacity-0 max-h-0"
                                 x-transition:enter-end="opacity-100 max-h-96"
                                 x-transition:leave="transition ease-in duration-300"
                                 x-transition:leave-start="opacity-100 max-h-96"
                                 x-transition:leave-end="opacity-0 max-h-0"
                                 class="overflow-hidden">
                                <div class="mt-5 text-slate-600 space-y-4 text-base leading-relaxed">
                                    {!! Str::of($service['long'])->trim()->replace("\n", '<br>')->toHtmlString() !!}
                                </div>
                            </div>

                            <button @click="open = (open === {{ $index }} ? null : {{ $index }})"
                                    class="mt-6 group inline-flex items-center font-semibold text-[#0575E6] hover:text-[#045BB5] transition-all">
                                <span x-text="open === {{ $index }} ? 'Show Less' : 'Read More'"></span>
                                <svg class="ml-2 w-5 h-5 transition-transform group-hover:translate-x-1"
                                     :class="{ 'rotate-180': open === {{ $index }} }"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Icon Card -->
                    <div class="{{ $index % 2 === 0 ? 'lg:order-2' : 'lg:order-1' }} flex justify-center">
                        <div class="relative p-1 rounded-3xl bg-gradient-to-br from-[#0575E6]/20 to-[#045BB5]/20"
                             data-tilt data-tilt-max="8" data-tilt-speed="400">
                            <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl p-10 shadow-2xl ring-1 ring-white/20">
                                <svg class="h-20 w-20 text-[#0575E6] animate-pulse-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    {!! $service['icon'] !!}
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="text-center mt-24">
            <a href="{{ route('contact-us') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-[#0575E6] to-[#045BB5] text-white font-bold text-lg rounded-full shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                Start Your Transformation
                <svg class="ml-3 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>

    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.0/dist/vanilla-tilt.min.js"></script>

    <!-- Animations -->
    <style>
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse-icon {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.15); }
        }
        .animate-slideUp { animation: slideUp 0.8s ease-out forwards; }
        .animate-pulse-icon { animation: pulse-icon 2s infinite ease-in-out; }
        [x-cloak] { display: none !important; }
    </style>
</div>