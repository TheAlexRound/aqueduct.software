<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <title>Aqueduct Software</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="{{url('frontend/css/vendors/aos.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/vendors/swiper-bundle.min.css')}}" />
    <link href="{{url('frontend/style.css')}}" rel="stylesheet">
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/55b1c7ce83.js" crossorigin="anonymous"></script>
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-inter antialiased bg-slate-900 text-slate-100 tracking-tight">

    <!-- Page wrapper -->
    <div class="flex flex-col min-h-screen overflow-hidden supports-[overflow:clip]:overflow-clip">

        <!-- Site header -->
        <header class="w-full pt-4 fixed z-50">
            <div class="max-w-6xl px-6 mx-auto">
                <div class="w-full bg-slate-900/40 bg-clip-padding backdrop-filter backdrop-blur-md border border-gray-100/20 rounded-3xl px-4 sm:px-6">
                    <div class="flex items-center justify-between h-16 md:h-20">

                        <!-- Site branding -->
                        <div class="flex-1 pt-2">
                            <!-- Logo -->
                            <a class="inline-flex" href="/" aria-label="Aqueduct Software">
                                <img class="max-w-none" src="{{url('frontend/images/aqueduct.png')}}" width="142" height="" alt="Stellar">
                            </a>
                        </div>

                        <!-- Desktop navigation -->
                        <nav class="hidden md:flex md:grow">

                            <!-- Desktop menu links -->
                            <ul class="flex grow justify-center flex-wrap items-center">
                                <li>
                                    <a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="/">Home</a>
                                </li>
                                <li>
                                    <a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="/projects">Our Projects</a>
                                </li>
                                <li>
                                    <a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="/method">Our Method</a>
                                </li>
                                <!--<li>
                                    <a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="/pricing">Pricing</a>
                                </li>-->
                                <!--<li>
                                    <a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="/about">About</a>
                                </li>-->
                            </ul>

                        </nav>

                        <!-- Desktop sign in links -->
                        <ul class="flex-1 md:flex hidden justify-end items-center">
                            <li class="ml-6">
                                <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out w-full group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/alex-aqueduct/discovery-call?hide_event_type_details=1&hide_gdpr_banner=1&primary_color=9f7aea'});return false;">
                                    <span class="relative inline-flex items-center">
                                        Book a free call <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                    </span>
                                </a>
                            </li>
                        </ul>

                        <!-- Mobile menu -->
                        <div class="md:hidden flex items-center ml-4" x-data="{ expanded: false }">

                            <!-- Hamburger button -->
                            <button class="group inline-flex w-8 h-8 text-slate-300 hover:text-white text-center items-center justify-center transition" aria-controls="mobile-nav" :aria-expanded="expanded" @click.stop="expanded = !expanded">
                                <span class="sr-only">Menu</span>
                                <svg class="w-4 h-4 fill-current pointer-events-none" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="origin-center transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.1)] -translate-y-[5px] group-aria-expanded:rotate-[315deg] group-aria-expanded:translate-y-0" y="7" width="16" height="2" rx="1"></rect>
                                    <rect class="origin-center group-aria-expanded:rotate-45 transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.8)]" y="7" width="16" height="2" rx="1"></rect>
                                    <rect class="origin-center transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.1)] translate-y-[5px] group-aria-expanded:rotate-[135deg] group-aria-expanded:translate-y-0" y="7" width="16" height="2" rx="1"></rect>
                                </svg>
                            </button>

                            <!-- Mobile navigation -->
                            <nav id="mobile-nav" class="absolute top-full z-20 left-0 w-full max-w-6xl mx-auto px-4 sm:px-6 overflow-hidden transition-all duration-300 ease-in-out" x-ref="mobileNav" :style="expanded ? 'max-height: ' + $refs.mobileNav.scrollHeight + 'px; opacity: 1' : 'max-height: 0; opacity: .8'" @click.outside="expanded = false" @keydown.escape.window="expanded = false" x-cloak>
                                <ul class="border border-transparent [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] rounded-lg px-4 py-2">
                                    <li class="pt-0.5">
                                        <a class="flex font-medium text-sm text-slate-300 hover:text-white py-1.5" href="/">Home</a>
                                    </li>
                                    <li class="py-0.5">
                                        <a class="flex font-medium text-sm text-slate-300 hover:text-white py-1.5" href="/projects">Our Projects</a>
                                    </li>
                                    <li class="py-0.5">
                                        <a class="flex font-medium text-sm text-slate-300 hover:text-white py-1.5" href="/method">Our Method</a>
                                    </li>
                                    <li class="pb-4 pt-2">
                                    <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out w-full group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/alex-aqueduct/discovery-call?hide_event_type_details=1&hide_gdpr_banner=1&primary_color=9f7aea'});return false;">
                                    <span class="relative inline-flex items-center">
                                        Book a free call <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                    </span>
                                </a>
                                    </li>
                                </ul>
                            </nav>

                        </div>

                    </div>
                </div>
            </div>
        </header>

        <!-- Page content -->
        <main class="grow px-1">
            {{ $slot }}
        </main>
        <!-- Site footer -->
        <footer>
            <div class="max-w-6xl mx-auto px-8 sm:px-12">

                <!-- Blocks -->
                <div class="grid grid-cols-2 sm:grid-cols-12 gap-8 py-8 md:py-12">

                    <!-- 1st block -->
                    <div class="col-span-2 sm:col-span-12 lg:col-span-4 order-1 lg:order-none">
                        <div class="h-full flex flex-col sm:flex-row lg:flex-col justify-between">
                            <div class="mb-4 sm:mb-0">
                                <div class="mb-4 flex items-center justify-center sm:justify-start">
                                    <!-- Logo -->
                                    <a class="inline-flex" href="/" aria-label="Cruip" onclick="window.scrollTo({top: 0, behavior: 'smooth'});">
                                        <img src="{{url('frontend/images/aqueduct.png')}}" class="w-40" alt="Stellar">
                                    </a>
                                </div>
                                <div class="text-sm w-full text-center md:text-left text-slate-300">&copy; Aqueduct Software <span class="text-slate-500">-</span> MXC <span class="text-slate-500">-</span> All rights reserved.</div>
                            </div>
                        </div>
                    </div>

                    <!-- 2nd block -->
                    <div class="col-span-1 sm:col-span-6 md:col-span-3 lg:col-span-2">
                        <h6 class="text-sm text-slate-50 font-medium mb-2">Links</h6>
                        <ul class="text-sm space-y-2">
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="/">Home</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="/projects">Our Projects</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="/method">Our Method</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 3rd block -->
                    <div class="col-span-1 sm:col-span-6 md:col-span-3 lg:col-span-2">
                        <h6 class="text-sm text-slate-50 font-medium mb-2">Projects</h6>
                        <ul class="text-sm space-y-2">
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="/projects/dinkar">Dinkår</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="/projects/spirec">Spirec</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="/projects/satilamusteri">Sätila Musteri</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="/projects">More Projects</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 4th block -->
                    <div class="col-span-2 sm:col-span-6 md:col-span-3 lg:col-span-2">
                        <h6 class="text-sm text-slate-50 font-medium mb-2">Contact</h6>
                        <ul class="text-sm space-y-2">
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">alex@aqueduct.software</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">+46 72 170 26 14</a>
                            </li>
                            <li class="pt-2">
                                <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out md:w-full group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/alex-aqueduct/discovery-call?hide_event_type_details=1&hide_gdpr_banner=1&primary_color=9f7aea'});return false;">
                                    <span class="relative inline-flex items-center">
                                        Book a free call <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </footer>

    </div>

    <script src="{{url('frontend/js/vendors/alpinejs.min.js')}}" defer></script>
    <script src="{{url('frontend/js/vendors/aos.js')}}"></script>
    <script src="{{url('frontend/js/vendors/swiper-bundle.min.js')}}"></script>
    <script src="{{url('frontend/js/main.js')}}"></script>

</body>

</html>
