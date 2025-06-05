<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ordecity</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* Tailwind CSS base styles */
                *,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.gap-8{gap:2rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.rounded-2xl{border-radius:1rem}.border{--tw-border-opacity:1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-2{border-width:2px}.border-\[\#0575E6\]{--tw-border-opacity:1;border-color:rgb(5 117 230 / var(--tw-border-opacity))}.bg-\[\#0575E6\]\/10{background-color:rgb(5 117 230 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-transparent{background-color:transparent}.stroke-\[\#0575E6\]{stroke:#0575E6}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.py-2\.5{padding-top:0.625rem;padding-bottom:0.625rem}.py-5{padding-top:1.25rem;padding-bottom:1.25rem}.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-2xl{font-size:1.5rem;line-height:2rem}.font-semibold{font-weight:600}.font-bold{font-weight:700}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-\[\#0575E6\]{--tw-text-opacity:1;color:rgb(5 117 230 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.tracking-tight{letter-spacing:-0.025em}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.duration-500{transition-duration:500ms}.ease-in-out{transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1)}.selection\:bg-\[\#0575E6\] *::selection{--tw-bg-opacity:1;background-color:rgb(5 117 230 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#0575E6\]::selection{--tw-bg-opacity:1;background-color:rgb(5 117 230 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.hover\:scale-105:hover{--tw-transform-scale:1.05;transform:scale(var(--tw-transform-scale))}.hover\:bg-\[\#0575E6\]:hover{--tw-bg-opacity:1;background-color:rgb(5 117 230 / var(--tw-bg-opacity))}.hover\:text-\[\#0575E6\]:hover{--tw-text-opacity:1;color:rgb(5 117 230 / var(--tw-text-opacity))}.active\:scale-95:active{--tw-transform-scale:0.95;transform:scale(var(--tw-transform-scale))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#0575E6\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(5 117 230 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}.md\:flex{display:flex}.md\:hidden{display:none}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#0575E6\]{--tw-text-opacity:1;color:rgb(5 117 230 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#0575E6\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(5 117 230 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}.slide-in{transform: translateX(100%);}.slide-in-active{transform: translateX(0);transition: transform 0.5s ease-in-out;}
            </style>
        @endif
    </head>
    <body class="font-sans antialiased">
        <div class="bg-gradient-to-br from-gray-50 to-gray-100 text-gray-900 min-h-screen flex flex-col">
            <header class="fixed top-0 left-0 w-full bg-white/95 backdrop-blur-md z-50">
                <div class="relative w-full max-w-7xl mx-auto px-6 lg:px-8">
                    <div class="flex items-center justify-between py-4 lg:py-5">
                        <!-- Brand Logo with Enhanced Animation -->
                        <div class="flex items-center space-x-3 group">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-9 w-9 text-[#0575E6] group-hover:rotate-12 group-hover:scale-110 transition-all duration-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3l7-2 7 2v6c0 5-3 9-7 10-4-1-7-5-7-10V3z" />
                            </svg>
                            <span class="text-2xl font-bold tracking-tight text-gray-800 group-hover:text-[#0575E6] transition-colors">Ordecity</span>
                        </div>

                        <!-- Navigation Menu -->
                        <nav class="hidden md:flex items-center space-x-10">
                            <a href="{{ url('/') }}"
                                class="relative group text-gray-600 hover:text-[#0575E6] font-semibold text-lg
                                before:absolute before:-bottom-1 before:left-0 before:w-0 before:h-0.5 before:bg-[#0575E6]
                                before:transition-all before:duration-300 hover:before:w-full {{ request()->is('/') ? 'text-[#0575E6] before:w-full' : '' }}">
                                Home
                            </a>
                            <a href="/about"
                                class="relative group text-gray-600 hover:text-[#0575E6] font-semibold text-lg
                                before:absolute before:-bottom-1 before:left-0 before:w-0 before:h-0.5 before:bg-[#0575E6]
                                before:transition-all before:duration-300 hover:before:w-full">
                                About
                            </a>
                            <a href="/blogs"
                                class="relative group text-gray-600 hover:text-[#0575E6] font-semibold text-lg
                                before:absolute before:-bottom-1 before:left-0 before:w-0 before:h-0.5 before:bg-[#0575E6]
                                before:transition-all before:duration-300 hover:before:w-full">
                                Blogs
                            </a>
                            <a href="{{ route('login') }}"
                                class="relative inline-flex items-center px-5 py-2.5 rounded-full border-2 border-[#0575E6] text-[#0575E6]
                                font-semibold text-lg hover:bg-[#0575E6] hover:text-white hover:shadow-md transition-all duration-300
                                transform hover:scale-105 active:scale-95">
                                Sign In
                            </a>
                        </nav>

                        <!-- Mobile Menu Toggle with Enhanced Animation -->
                        <div class="md:hidden">
                            <button id="mobile-menu-toggle"
                                class="text-gray-600 hover:text-[#0575E6] focus:outline-none
                                transform hover:scale-110 active:scale-95 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile Menu with Slide-in Animation -->
                    <div id="mobile-menu"
                        class="md:hidden absolute top-full left-0 w-full bg-white/95 backdrop-blur-md hidden slide-in">
                        <div class="px-6 py-6 space-y-5">
                            <a href="{{ url('/') }}"
                                class="block text-gray-600 hover:text-[#0575E6] font-semibold text-lg
                                {{ request()->is('/') ? 'text-[#0575E6]' : '' }}">
                                Home
                            </a>
                            <a href="/about"
                                class="block text-gray-600 hover:text-[#0575E6] font-semibold text-lg">
                                About
                            </a>
                            <a href="/blogs"
                                class="block text-gray-600 hover:text-[#0575E6] font-semibold text-lg">
                                Blogs
                            </a>
                            <a href="{{ route('login') }}"
                                class="block w-full text-center px-5 py-2.5 rounded-full border-2 border-[#0575E6] text-[#0575E6]
                                font-semibold text-lg hover:bg-[#0575E6] hover:text-white transition-all duration-300">
                                Sign In
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
                    const mobileMenu = document.getElementById('mobile-menu');

                    mobileMenuToggle.addEventListener('click', function(event) {
                        event.stopPropagation();
                        mobileMenu.classList.toggle('hidden');
                        mobileMenu.classList.toggle('slide-in');
                        mobileMenu.classList.toggle('slide-in-active');
                    });

                    // Close mobile menu when clicking outside
                    document.addEventListener('click', function() {
                        if (!mobileMenu.classList.contains('hidden')) {
                            mobileMenu.classList.add('slide-in');
                            mobileMenu.classList.remove('slide-in-active');
                            setTimeout(() => {
                                mobileMenu.classList.add('hidden');
                            }, 500); // Match the transition duration
                        }
                    });

                    // Prevent mobile menu from closing when clicking inside
                    mobileMenu.addEventListener('click', function(event) {
                        event.stopPropagation();
                    });
                });
            </script>

        {{ $slot }}

        @include('components.home.footer')
        </div>
    </body>
</html>