<x-layout>

    <!-- Hero -->
    <section class="relative">

        <!-- Illustration 02 -->
        <div class="md:block absolute left-1/2 -translate-x-1/2 bottom-0 -mb-16 blur-2xl opacity-90 pointer-events-none -z-10" aria-hidden="true">
            <img src="{{url('frontend/images/page-illustration-02.svg')}}" class="max-w-none" width="1440" height="427" alt="Page Illustration 02">
        </div>

        <!-- Opacity layer -->
        <div class="absolute inset-0 bg-slate-900 opacity-60 -z-10" aria-hidden="true"></div>

        <!-- Radial gradient -->
        <div class="absolute flex items-center justify-center top-0 -translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-[800px] aspect-square" aria-hidden="true">
            <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-[120px] opacity-30"></div>
            <div class="absolute w-64 h-64 translate-z-0 bg-purple-400 rounded-full blur-[80px] opacity-70"></div>
        </div>

        <!-- Particles animation -->
        <div class="absolute inset-0 h-96 -z-10" aria-hidden="true">
            <canvas data-particle-animation data-particle-quantity="15"></canvas>
        </div>

        <!-- Illustration -->
        <div class="md:block absolute left-1/2 -translate-x-1/2 -mt-16 blur-2xl opacity-90 pointer-events-none -z-10" aria-hidden="true">
            <img src="{{url('frontend/images/page-illustration.svg')}}" class="max-w-none" width="1440" height="427" alt="Page Illustration">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 md:pt-40">

                <!-- Hero content -->
                <div class="text-center pb-8 md:pb-16">
                    <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Case studies</div>
                    <h1 class="h1 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Our favourite projects.</h1>
                    <div class="max-w-3xl mx-auto">
                        <p class="text-lg text-slate-400">A showcase of digital journeys we're proud to have shaped - blending design, tech, and trust to bring each client's vision to life.</p>
                    </div>
                </div>

                <!-- Carousel built with Swiper.js [https://swiperjs.com/] -->
                <!-- * Initialized in src/js/main.js -->
                <!-- * Custom styles in src/css/additional-styles/theme.scss -->
                <!--
                    <div class="stellar-carousel swiper-container group">
                        <div class="swiper-wrapper w-fit">

                            <div class="swiper-slide h-auto bg-linear-to-tr from-slate-800 to-slate-800/25 rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div class="flex flex-col p-5 h-full">
                                    <div class="flex items-center space-x-3 mb-3">
                                        <div class="relative">
                                            <img src="{{url('frontend/images/integrations-01.svg')}}" width="40" height="40" alt="Icon 01">
                                            <img class="absolute top-0 -right-1" src="{{url('frontend/images/star.svg')}}" width="16" height="16" alt="Star" aria-hidden="true">
                                        </div>
                                        <a class="font-semibold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 group-hover:before:absolute group-hover:before:inset-0" href="{{url('frontend/integrations-single.html')}}">Retool</a>
                                    </div>
                                    <div class="grow mb-4">
                                        <div class="text-sm text-slate-400">Stellar makes it easy to build extensions by providing an authentication provider that handles the OAuth flow.</div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex -space-x-3 -ml-0.5">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-01.jpg')}}" width="24" height="24" alt="Avatar 01">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-02.jpg')}}" width="24" height="24" alt="Avatar 02">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-03.jpg')}}" width="24" height="24" alt="Avatar 03">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-04.jpg')}}" width="24" height="24" alt="Avatar 04">
                                        </div>
                                        <button class="flex items-center space-x-2 font-medium text-sm text-slate-300 hover:text-white transition-colors">
                                            <span class="sr-only">Like</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path class="fill-slate-500" d="M11.86 15.154 8 13.125l-3.86 2.03c-.726.386-1.591-.236-1.45-1.055l.737-4.299L.303 6.757a1 1 0 0 1 .555-1.706l4.316-.627L7.104.512c.337-.683 1.458-.683 1.794 0l1.93 3.911 4.317.627a1.001 1.001 0 0 1 .555 1.706l-3.124 3.045.737 4.3c.14.822-.726 1.435-1.452 1.053ZM8.468 11.11l2.532 1.331-.483-2.82a1 1 0 0 1 .287-.885l2.049-1.998-2.831-.41a.996.996 0 0 1-.753-.548L8 3.214 6.734 5.78a1 1 0 0 1-.753.547l-2.831.411 2.049 1.998a1 1 0 0 1 .287.885l-.483 2.82 2.532-1.33a.998.998 0 0 1 .932 0Z" />
                                            </svg>
                                            <span>2.3K</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto bg-linear-to-tr from-slate-800 to-slate-800/25 rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div class="flex flex-col p-5 h-full">
                                    <div class="flex items-center space-x-3 mb-3">
                                        <div class="relative">
                                            <img src="{{url('frontend/images/integrations-02.svg')}}" width="40" height="40" alt="Icon 02">
                                            <img class="absolute top-0 -right-1" src="{{url('frontend/images/star.svg')}}" width="16" height="16" alt="Star" aria-hidden="true">
                                        </div>
                                        <a class="font-semibold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 group-hover:before:absolute group-hover:before:inset-0" href="{{url('frontend/integrations-single.html')}}">Zapier</a>
                                    </div>
                                    <div class="grow mb-4">
                                        <div class="text-sm text-slate-400">Stellar makes it easy to build extensions by providing an authentication provider that handles the OAuth flow.</div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex -space-x-3 -ml-0.5">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-05.jpg')}}" width="24" height="24" alt="Avatar 05">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-06.jpg')}}" width="24" height="24" alt="Avatar 06">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-07.jpg')}}" width="24" height="24" alt="Avatar 07">
                                        </div>
                                        <button class="flex items-center space-x-2 font-medium text-sm text-slate-300 hover:text-white transition-colors">
                                            <span class="sr-only">Like</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path class="fill-slate-500" d="M11.86 15.154 8 13.125l-3.86 2.03c-.726.386-1.591-.236-1.45-1.055l.737-4.299L.303 6.757a1 1 0 0 1 .555-1.706l4.316-.627L7.104.512c.337-.683 1.458-.683 1.794 0l1.93 3.911 4.317.627a1.001 1.001 0 0 1 .555 1.706l-3.124 3.045.737 4.3c.14.822-.726 1.435-1.452 1.053ZM8.468 11.11l2.532 1.331-.483-2.82a1 1 0 0 1 .287-.885l2.049-1.998-2.831-.41a.996.996 0 0 1-.753-.548L8 3.214 6.734 5.78a1 1 0 0 1-.753.547l-2.831.411 2.049 1.998a1 1 0 0 1 .287.885l-.483 2.82 2.532-1.33a.998.998 0 0 1 .932 0Z" />
                                            </svg>
                                            <span>4.5K</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto bg-linear-to-tr from-slate-800 to-slate-800/25 rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div class="flex flex-col p-5 h-full">
                                    <div class="flex items-center space-x-3 mb-3">
                                        <div class="relative">
                                            <img src="{{url('frontend/images/integrations-03.svg')}}" width="40" height="40" alt="Icon 03">
                                            <img class="absolute top-0 -right-1" src="{{url('frontend/images/star.svg')}}" width="16" height="16" alt="Star" aria-hidden="true">
                                        </div>
                                        <a class="font-semibold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 group-hover:before:absolute group-hover:before:inset-0" href="{{url('frontend/integrations-single.html')}}">Airtable</a>
                                    </div>
                                    <div class="grow mb-4">
                                        <div class="text-sm text-slate-400">Stellar makes it easy to build extensions by providing an authentication provider that handles the OAuth flow.</div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex -space-x-3 -ml-0.5">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-08.jpg')}}" width="24" height="24" alt="Avatar 08">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-09.jpg')}}" width="24" height="24" alt="Avatar 09">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-10.jpg')}}" width="24" height="24" alt="Avatar 10">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-11.jpg')}}" width="24" height="24" alt="Avatar 11">
                                        </div>
                                        <button class="flex items-center space-x-2 font-medium text-sm text-slate-300 hover:text-white transition-colors">
                                            <span class="sr-only">Like</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path class="fill-slate-500" d="M11.86 15.154 8 13.125l-3.86 2.03c-.726.386-1.591-.236-1.45-1.055l.737-4.299L.303 6.757a1 1 0 0 1 .555-1.706l4.316-.627L7.104.512c.337-.683 1.458-.683 1.794 0l1.93 3.911 4.317.627a1.001 1.001 0 0 1 .555 1.706l-3.124 3.045.737 4.3c.14.822-.726 1.435-1.452 1.053ZM8.468 11.11l2.532 1.331-.483-2.82a1 1 0 0 1 .287-.885l2.049-1.998-2.831-.41a.996.996 0 0 1-.753-.548L8 3.214 6.734 5.78a1 1 0 0 1-.753.547l-2.831.411 2.049 1.998a1 1 0 0 1 .287.885l-.483 2.82 2.532-1.33a.998.998 0 0 1 .932 0Z" />
                                            </svg>
                                            <span>4.7K</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto bg-linear-to-tr from-slate-800 to-slate-800/25 rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div class="flex flex-col p-5 h-full">
                                    <div class="flex items-center space-x-3 mb-3">
                                        <div class="relative">
                                            <img src="{{url('frontend/images/integrations-04.svg')}}" width="40" height="40" alt="Icon 04">
                                            <img class="absolute top-0 -right-1" src="{{url('frontend/images/star.svg')}}" width="16" height="16" alt="Star" aria-hidden="true">
                                        </div>
                                        <a class="font-semibold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 group-hover:before:absolute group-hover:before:inset-0" href="{{url('frontend/integrations-single.html')}}">Jira</a>
                                    </div>
                                    <div class="grow mb-4">
                                        <div class="text-sm text-slate-400">Stellar makes it easy to build extensions by providing an authentication provider that handles the OAuth flow.</div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex -space-x-3 -ml-0.5">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-12.jpg')}}" width="24" height="24" alt="Avatar 12">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-13.jpg')}}" width="24" height="24" alt="Avatar 13">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-14.jpg')}}" width="24" height="24" alt="Avatar 14">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-15.jpg')}}" width="24" height="24" alt="Avatar 15">
                                        </div>
                                        <button class="flex items-center space-x-2 font-medium text-sm text-slate-300 hover:text-white transition-colors">
                                            <span class="sr-only">Like</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path class="fill-slate-500" d="M11.86 15.154 8 13.125l-3.86 2.03c-.726.386-1.591-.236-1.45-1.055l.737-4.299L.303 6.757a1 1 0 0 1 .555-1.706l4.316-.627L7.104.512c.337-.683 1.458-.683 1.794 0l1.93 3.911 4.317.627a1.001 1.001 0 0 1 .555 1.706l-3.124 3.045.737 4.3c.14.822-.726 1.435-1.452 1.053ZM8.468 11.11l2.532 1.331-.483-2.82a1 1 0 0 1 .287-.885l2.049-1.998-2.831-.41a.996.996 0 0 1-.753-.548L8 3.214 6.734 5.78a1 1 0 0 1-.753.547l-2.831.411 2.049 1.998a1 1 0 0 1 .287.885l-.483 2.82 2.532-1.33a.998.998 0 0 1 .932 0Z" />
                                            </svg>
                                            <span>4.4K</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto bg-linear-to-tr from-slate-800 to-slate-800/25 rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div class="flex flex-col p-5 h-full">
                                    <div class="flex items-center space-x-3 mb-3">
                                        <div class="relative">
                                            <img src="{{url('frontend/images/integrations-05.svg')}}" width="40" height="40" alt="Icon 05">
                                            <img class="absolute top-0 -right-1" src="{{url('frontend/images/star.svg')}}" width="16" height="16" alt="Star" aria-hidden="true">
                                        </div>
                                        <a class="font-semibold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 group-hover:before:absolute group-hover:before:inset-0" href="{{url('frontend/integrations-single.html')}}">GitLab</a>
                                    </div>
                                    <div class="grow mb-4">
                                        <div class="text-sm text-slate-400">Stellar makes it easy to build extensions by providing an authentication provider that handles the OAuth flow.</div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex -space-x-3 -ml-0.5">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-16.jpg')}}" width="24" height="24" alt="Avatar 16">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-17.jpg')}}" width="24" height="24" alt="Avatar 17">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-18.jpg')}}" width="24" height="24" alt="Avatar 18">
                                            <img class="rounded-full border-2 border-slate-800 box-content" src="{{url('frontend/images/avatar-19.jpg')}}" width="24" height="24" alt="Avatar 19">
                                        </div>
                                        <button class="flex items-center space-x-2 font-medium text-sm text-slate-300 hover:text-white transition-colors">
                                            <span class="sr-only">Like</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path class="fill-slate-500" d="M11.86 15.154 8 13.125l-3.86 2.03c-.726.386-1.591-.236-1.45-1.055l.737-4.299L.303 6.757a1 1 0 0 1 .555-1.706l4.316-.627L7.104.512c.337-.683 1.458-.683 1.794 0l1.93 3.911 4.317.627a1.001 1.001 0 0 1 .555 1.706l-3.124 3.045.737 4.3c.14.822-.726 1.435-1.452 1.053ZM8.468 11.11l2.532 1.331-.483-2.82a1 1 0 0 1 .287-.885l2.049-1.998-2.831-.41a.996.996 0 0 1-.753-.548L8 3.214 6.734 5.78a1 1 0 0 1-.753.547l-2.831.411 2.049 1.998a1 1 0 0 1 .287.885l-.483 2.82 2.532-1.33a.998.998 0 0 1 .932 0Z" />
                                            </svg>
                                            <span>3.4K</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <-- Arrows ->
                    <div class="flex py-8 justify-end">
                        <button class="carousel-prev relative z-20 w-12 h-12 flex items-center justify-center group">
                            <span class="sr-only">Previous</span>
                            <svg class="w-4 h-4 fill-slate-500 group-hover:fill-purple-500 transition duration-150 ease-in-out" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.7 14.7l1.4-1.4L3.8 9H16V7H3.8l4.3-4.3-1.4-1.4L0 8z" />
                            </svg>
                        </button>
                        <button class="carousel-next relative z-20 w-12 h-12 flex items-center justify-center group">
                            <span class="sr-only">Next</span>
                            <svg class="w-4 h-4 fill-slate-500 group-hover:fill-purple-500 transition duration-150 ease-in-out" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.3 14.7l-1.4-1.4L12.2 9H0V7h12.2L7.9 2.7l1.4-1.4L16 8z" />
                            </svg>
                        </button>
                    </div>
                -->

                <div class="flex justify-center items-center pb-6 border-b [border-image:linear-gradient(to_right,transparent,var(--color-slate-800),transparent)1] space-x-8 overflow-x-scroll no-scrollbar">
                    <!-- Links -->
                    <ul class="flex pb-4 flex-nowrap text-sm font-medium space-x-4 sm:space-x-8 overflow-x-auto max-w-full px-2">
                        <li class="flex-shrink-0">
                            <a class="flex items-center text-slate-50 hover:text-white whitespace-nowrap transition-colors space-x-2" href="#webapps">
                                <i class="fas fa-network-wired text-slate-500"></i>
                                <span>Custom webapps</span>
                            </a>
                        </li>
                        <li class="flex-shrink-0">
                            <a class="flex items-center text-slate-50 hover:text-white whitespace-nowrap transition-colors space-x-2" href="#integrations">
                                <i class="fas fa-code-branch text-slate-500"></i>
                                <span>Third-party integrations</span>
                            </a>
                        </li>
                        <li class="flex-shrink-0">
                            <a class="flex items-center text-slate-50 hover:text-white whitespace-nowrap transition-colors space-x-2" href="#websites">
                                <i class="text-slate-500 fas fa-laptop"></i>
                                <span>Websites</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <!-- Categories -->
    <section>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">

            <div class="pb-12 md:pb-20">
                <!-- Cards -->
                <div>
                    <!-- Section #1 -->
                    <div class="mt-12 md:mt-16">
                        <div class="flex items-center gap-3 pl-1 pb-8 ">
                            <i class="fas text-slate-400 text-xl fa-network-wired"></i>
                            <h3 id="webapps" class="scroll-mt-32 text-2xl font-bold inline-flex text-slate-100">Custom webapps</h3>
                        </div>
                        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- Card #1 -->
                            <div class="bg-linear-to-tr from-slate-800 to-slate-800/25 rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div>
                                    <img class="w-full h-48 object-cover object-left rounded-t-3xl" src="{{url('frontend/images/dinkar-screenshot.jpg')}}" alt="Project 01">
                                </div>
                                <div class="flex flex-col p-5 grow">
                                    <div class="flex items-center space-x-3 mb-3">
                                        <img class="w-32 object-cover h-12" src="{{url('frontend/images/client-dinkar.png')}}" alt="">
                                    </div>
                                    <div class="">
                                        <h4 class="text-lg font-semibold text-slate-100 mb-2">Custom event managment & ticketing system</h4>
                                        <div class="text-sm text-slate-400">A complete event managment, CRM, ticket sales and analytics dashboard suite with multiple seamless integrations between the platform, payment proccessors and external databases through APIs.</div>
                                    </div>
                                    <div class="mt-6 ">
                                        <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="/projects/dinkar">
                                            See project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card #2 -->
                            <div class="bg-linear-to-tr from-slate-800 to-slate-800/25 rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div>
                                    <img class="w-full h-48 object-cover object-left rounded-t-3xl" src="{{url('frontend/images/spirec-screenshot.png')}}" alt="Project 01">
                                </div>
                                <div class="flex flex-col p-5">
                                    <div class="flex items-center space-x-3 mb-3">
                                        <img class="w-28 object-cover h-12" src="{{url('frontend/images/client-spirec.png')}}" alt="">
                                    </div>
                                    <div class="grow">
                                        <h4 class="text-lg font-semibold text-slate-100 mb-2">Fully automated stock control & analytics system</h4>
                                        <div class="text-sm text-slate-400">A bespoke e-commerce order-fulfillment system that deeply integrates with Shopify's API, automating everything from incoming orders and inventory updates to shipping labels and analytics.</div>
                                        <div class="mt-6">
                                            <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="/projects/spirec">
                                                See project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card #3 -->
                            <div class="bg-linear-to-tr from-slate-800 to-slate-800/25 rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div>
                                    <img class="w-full h-48 object-cover object-left-top rounded-t-3xl" src="{{url('frontend/images/musteri-screenshot.png')}}" alt="Project 01">
                                </div>
                                <div class="flex flex-col p-5 h-full">
                                    <div class="flex items-center space-x-3 mb-3">
                                        <img class="w-32 object-cover h-12" src="{{url('frontend/images/satilamusteri-logo.png')}}" alt="">
                                    </div>
                                    <div class="grow">
                                        <h4 class="text-lg font-semibold text-slate-100 mb-2">Custom membership and bookings platform</h4>
                                        <div class="text-sm text-slate-400">A custom-built membership platform for a cider-brewery where members can easily renew their membership, book equipment online in an integrated calendar, and manage their payments through a smooth and mobile-friendly UI.</div>
                                        <div class="mt-6">
                                            <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="/projects/satilamusteri">
                                                See project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Section #2 -->
                    <div class="mt-12 md:mt-16">
                        <div class="flex items-center gap-3 pl-1 pb-8 ">
                            <i class="fas text-slate-400 text-xl fa-code-branch"></i>
                            <h3 id="integrations" class="scroll-mt-32 text-2xl font-bold inline-flex text-slate-100">Third-party integrations</h3>
                        </div>
                        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- Card #1 -->
                            <div class="bg-linear-to-tr from-slate-800 to-slate-800/25 rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div class="flex flex-col p-5 h-full">
                                    <div class="w-full flex gap-2 justify-between items-center mb-3">
                                        <img class="w-24" src="{{url('frontend/images/at-logo.png')}}" alt="Icon 02">
                                        <div class="w-full h-0.5 rounded-2xl border-0 bg-gradient-to-r from-purple-500 via-pink-500 to-purple-500"></div>
                                        <img class="w-24" src="{{url('frontend/images/vs-logo.png')}}" alt="Icon 02">
                                    </div>
                                    <div class="flex items-center space-x-3 my-3">
                                        <h3 class="text-lg font-semibold text-slate-100">Invoicing & financials integration</h3>
                                    </div>
                                    <div class="grow">
                                        <div class="text-sm text-slate-400">A robust two-way API integration that syncs invoicing, articles and customer data between Autotask & Visma.</div>
                                        <div class="mt-6">
                                            <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="/projects/integrations/autotask-visma">
                                                See project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card #2 -->
                            <div class="bg-linear-to-tr from-slate-800 to-slate-800/25 rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div class="flex flex-col p-5 h-full">
                                    <div class="w-full flex gap-2 justify-between items-center mb-3">
                                        <img class="w-20" src="{{url('frontend/images/stripe-logo.png')}}" alt="Icon 02">
                                        <div class="w-full h-0.5 rounded-2xl border-0 bg-gradient-to-r from-purple-500 via-pink-500 to-purple-500"></div>
                                        <img class="w-24" src="{{url('frontend/images/client-dinkar.png')}}" alt="Icon 02">
                                    </div>
                                    <div class="flex items-center space-x-3 my-3">
                                        <h3 class="text-lg font-semibold text-slate-100">Payment proccessor integration</h3>
                                    </div>
                                    <div class="grow">
                                        <div class="text-sm text-slate-400">A powerful multi-directional payment integration between Stripe and DinKår that automatically distributes funds between multiple recipients.</div>
                                        <div class="mt-6">
                                            <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="/projects/integrations/stripe-dinkar">
                                                See project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card #3 -->
                            <div class="bg-linear-to-tr from-slate-800 to-slate-800/25 rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div class="flex flex-col p-5 h-full">
                                    <div class="w-full flex gap-2 justify-between items-center mb-3">
                                        <img class="w-24" src="{{url('frontend/images/sh-logo.png')}}" alt="Icon 02">
                                        <div class="w-full h-0.5 rounded-2xl border-0 bg-gradient-to-r from-purple-500 via-pink-500 to-purple-500"></div>
                                        <img class="w-24" src="{{url('frontend/images/client-spirec.png')}}" alt="Icon 02">
                                    </div>
                                    <div class="flex items-center space-x-3 my-3">
                                        <h3 class="text-lg font-semibold text-slate-100">Orders & inventory sync integration</h3>
                                    </div>
                                    <div class="grow">
                                        <div class="text-sm text-slate-400">A two-way sync between Shopify and Spirec control system that keeps inventory accurate, streamlines order handling, updates in real-time.</div>
                                        <div class="mt-6">
                                            <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="{{url('/projects/integrations/shopify-spirec')}}">
                                                See project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section #3 -->
                    <div class="mt-12 md:mt-16">
                        <div class="flex items-center gap-3 pl-1 pb-8 ">
                            <i class="fas text-slate-400 text-xl fa-laptop"></i>
                            <h3 id="websites" class="scroll-mt-32 text-2xl font-bold inline-flex text-slate-100">Websites</h3>
                        </div>
                        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- Card #1 -->
                            <div class="bg-linear-to-tr from-slate-800 to-slate-800/25 overflow-hidden rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div class="relative flex items-center justify-center pt-6">
                                    <img class=" w-10/12 h-48 object-cover z-20 object-center rounded-t-3xl" src="{{url('frontend/images/mera-mockup.png')}}" alt="Project 01">
                                    <div class="absolute flex items-center justify-center inset-0 pointer-events-none z-10 aspect-square -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2" aria-hidden="true">
                                        <div class="absolute size-24 inset-0 translate-z-0 bg-purple-500 rounded-full blur-[80px] opacity-30"></div>
                                        <div class="absolute size-24 translate-z-0 bg-purple-400 rounded-full blur-[50px] opacity-80"></div>
                                    </div>
                                </div>
                                <div class="flex flex-col p-5 h-full">
                                    <div class="grow z-20">
                                        <h4 class="text-lg font-semibold text-slate-100 mb-2">merakonsult.se</h4>
                                        <div class="text-sm text-slate-400">A clean and professional website built for a accounting firm, highlighting their accounting services, pricing, and expertise, with a clear structure that makes it easy for clients to get in touch and stay informed.</div>
                                        <div class="mt-6">
                                            <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="#0">
                                                See project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card #2 -->
                            <div class="bg-linear-to-tr from-slate-800 to-slate-800/25 overflow-hidden rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div class="relative flex items-center justify-center pt-6">
                                    <img class=" w-10/12 h-48 object-cover z-20 object-center rounded-t-3xl" src="{{url('frontend/images/beachburgers-mockup.png')}}" alt="Project 01">
                                    <div class="absolute flex items-center justify-center inset-0 pointer-events-none z-10 aspect-square -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2" aria-hidden="true">
                                        <div class="absolute size-24 inset-0 translate-z-0 bg-purple-500 rounded-full blur-[80px] opacity-30"></div>
                                        <div class="absolute size-24 translate-z-0 bg-purple-400 rounded-full blur-[50px] opacity-80"></div>
                                    </div>
                                </div>
                                <div class="flex flex-col p-5 h-full">
                                    <div class="grow z-20">
                                        <h4 class="text-lg font-semibold text-slate-100 mb-2">beachburgers.se</h4>
                                        <div class="text-sm text-slate-400">A vibrant and mobile-friendly website designed for a food truck and catering company, showcasing their menu, event services, and easy online contacting wrapped in a bold, appetizing design.</div>
                                        <div class="mt-6">
                                            <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="#0">
                                                See project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card #3 -->
                            <div class="bg-linear-to-tr from-slate-800 to-slate-800/25 overflow-hidden rounded-3xl border border-slate-800 hover:border-slate-700/60 transition-colors group relative">
                                <div class="relative flex items-center justify-center pt-6">
                                    <img class=" w-10/12 h-48 object-cover z-20 object-center rounded-t-3xl" src="{{url('frontend/images/allround-mockup.png')}}" alt="Project 01">
                                    <div class="absolute flex items-center justify-center inset-0 pointer-events-none z-10 aspect-square -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2" aria-hidden="true">
                                        <div class="absolute size-24 inset-0 translate-z-0 bg-purple-500 rounded-full blur-[80px] opacity-30"></div>
                                        <div class="absolute size-24 translate-z-0 bg-purple-400 rounded-full blur-[50px] opacity-80"></div>
                                    </div>
                                </div>
                                <div class="flex flex-col p-5 h-full">
                                    <div class="grow z-20">
                                        <h4 class="text-lg font-semibold text-slate-100 mb-2">allroundcoaching.se</h4>
                                        <div class="text-sm text-slate-400">A calming and welcoming website created for a coaching and massage clinic, presenting their services, philosophy, and booking options with soothing visuals and a layout designed to inspire trust and relaxation.</div>
                                        <div class="mt-6">
                                            <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="#0">
                                                See project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <x-cta></x-cta>

</x-layout>
