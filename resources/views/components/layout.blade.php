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
                                    <a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="/projects">Projects</a>
                                </li>
                                <li>
                                    <a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="/method">Method</a>
                                </li>
                                <!--<li>
                                    <a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="/pricing">Pricing</a>
                                </li>-->
                                <li>
                                    <a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="/about">About</a>
                                </li>
                            </ul>

                        </nav>

                        <!-- Desktop sign in links -->
                        <ul class="flex-1 flex justify-end items-center">
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
                            <nav id="mobile-nav" class="absolute top-full z-20 left-0 w-full px-4 sm:px-6 overflow-hidden transition-all duration-300 ease-in-out" x-ref="mobileNav" :style="expanded ? 'max-height: ' + $refs.mobileNav.scrollHeight + 'px; opacity: 1' : 'max-height: 0; opacity: .8'" @click.outside="expanded = false" @keydown.escape.window="expanded = false" x-cloak>
                                <ul class="border border-transparent [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] rounded-lg px-4 py-1.5">
                                    <li>
                                        <a class="flex font-medium text-sm text-slate-300 hover:text-white py-1.5" href="about.html">About</a>
                                    </li>
                                    <li>
                                        <a class="flex font-medium text-sm text-slate-300 hover:text-white py-1.5" href="integrations.html">Integrations</a>
                                    </li>
                                    <li>
                                        <a class="flex font-medium text-sm text-slate-300 hover:text-white py-1.5" href="pricing.html">Pricing</a>
                                    </li>
                                    <li>
                                        <a class="flex font-medium text-sm text-slate-300 hover:text-white py-1.5" href="customers.html">Customers</a>
                                    </li>
                                    <li>
                                        <a class="flex font-medium text-sm text-slate-300 hover:text-white py-1.5" href="changelog.html">Changelog</a>
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
            <div class="max-w-6xl mx-auto px-4 sm:px-6">

                <!-- Blocks -->
                <div class="grid sm:grid-cols-12 gap-8 py-8 md:py-12">

                    <!-- 1st block -->
                    <div class="sm:col-span-12 lg:col-span-4 order-1 lg:order-none">
                        <div class="h-full flex flex-col sm:flex-row lg:flex-col justify-between">
                            <div class="mb-4 sm:mb-0">
                                <div class="mb-4">
                                    <!-- Logo -->
                                    <a class="inline-flex" href="index.html" aria-label="Cruip">
                                        <img src="{{url('frontend/images/logo.svg')}}" width="38" height="38" alt="Stellar">
                                    </a>
                                </div>
                                <div class="text-sm text-slate-300">&copy; Cruip.com <span class="text-slate-500">-</span> All rights reserved.</div>
                            </div>
                            <!-- Social links -->
                            <ul class="flex">
                                <li>
                                    <a class="flex justify-center items-center text-purple-500 hover:text-purple-400 transition duration-150 ease-in-out" href="#0" aria-label="Twitter">
                                        <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m13.063 9 3.495 4.475L20.601 9h2.454l-5.359 5.931L24 23h-4.938l-3.866-4.893L10.771 23H8.316l5.735-6.342L8 9h5.063Zm-.74 1.347h-1.457l8.875 11.232h1.36l-8.778-11.232Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="ml-2">
                                    <a class="flex justify-center items-center text-purple-500 hover:text-purple-400 transition duration-150 ease-in-out" href="#0" aria-label="Dev.to">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                                            <path class="w-8 h-8 fill-current" d="M12.29 14.3a.69.69 0 0 0-.416-.155h-.623v3.727h.623a.689.689 0 0 0 .416-.156.543.543 0 0 0 .21-.466v-2.488a.547.547 0 0 0-.21-.462ZM22.432 8H9.568C8.704 8 8.002 8.7 8 9.564v12.872A1.568 1.568 0 0 0 9.568 24h12.864c.864 0 1.566-.7 1.568-1.564V9.564A1.568 1.568 0 0 0 22.432 8Zm-8.925 9.257a1.631 1.631 0 0 1-1.727 1.687h-1.657v-5.909h1.692a1.631 1.631 0 0 1 1.692 1.689v2.533ZM17.1 14.09h-1.9v1.372h1.163v1.057H15.2v1.371h1.9v1.056h-2.217a.72.72 0 0 1-.74-.7v-4.471a.721.721 0 0 1 .7-.739H17.1v1.054Zm3.7 4.118c-.471 1.1-1.316.88-1.694 0l-1.372-5.172H18.9l1.058 4.064 1.056-4.062h1.164l-1.378 5.17Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="ml-2">
                                    <a class="flex justify-center items-center text-purple-500 hover:text-purple-400 transition duration-150 ease-in-out" href="#0" aria-label="Github">
                                        <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 8.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V22c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- 2nd block -->
                    <div class="sm:col-span-6 md:col-span-3 lg:col-span-2">
                        <h6 class="text-sm text-slate-50 font-medium mb-2">Products</h6>
                        <ul class="text-sm space-y-2">
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Features</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Integrations</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Pricing & Plans</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Changelog</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Our method</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 3rd block -->
                    <div class="sm:col-span-6 md:col-span-3 lg:col-span-2">
                        <h6 class="text-sm text-slate-50 font-medium mb-2">Company</h6>
                        <ul class="text-sm space-y-2">
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">About us</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Diversity & Inclusion</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Blog</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Careers</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Financial statements</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 4th block -->
                    <div class="sm:col-span-6 md:col-span-3 lg:col-span-2">
                        <h6 class="text-sm text-slate-50 font-medium mb-2">Resources</h6>
                        <ul class="text-sm space-y-2">
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Community</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Terms of service</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Report a vulnerability</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 5th block -->
                    <div class="sm:col-span-6 md:col-span-3 lg:col-span-2">
                        <h6 class="text-sm text-slate-50 font-medium mb-2">Legals</h6>
                        <ul class="text-sm space-y-2">
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Refund policy</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Terms & Conditions</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Privacy policy</a>
                            </li>
                            <li>
                                <a class="text-slate-400 hover:text-slate-200 transition duration-150 ease-in-out" href="#0">Brand Kit</a>
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
