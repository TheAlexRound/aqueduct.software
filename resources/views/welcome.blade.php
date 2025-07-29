<x-layout>
    <!-- Hero -->
    <section class="min-h-[80vh] flex items-center">
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 w-full">

            <!-- Particles animation -->
            <div class="absolute inset-0 -z-10" aria-hidden="true">
                <canvas data-particle-animation></canvas>
            </div>

            <!-- Illustration -->
            <div class="absolute flex items-center justify-center top-0 -translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-[800px] aspect-square" aria-hidden="true">
                <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-[120px] opacity-30"></div>
                <div class="absolute w-64 h-64 translate-z-0 bg-purple-400 rounded-full blur-[80px] opacity-70"></div>
            </div>
            <div class="md:block absolute left-1/2 -translate-x-1/2 -mt-16 blur-2xl opacity-90 pointer-events-none -z-10" aria-hidden="true">
                <img src="{{url('frontend/images/page-illustration.svg')}}" class="max-w-none" width="1440" height="427" alt="Page Illustration">
            </div>

            <div class="pt-32 pb-16 md:pt-52 md:pb-32">

                <!-- Hero content -->
                <div class="max-w-3xl mx-auto text-center">
                    <div class="mb-6" data-aos="fade-down">
                        <div class="inline-flex relative before:absolute before:inset-0 before:bg-purple-500 before:blur-md">
                            <a class="btn-sm py-1.5 hover:scale-103 text-slate-300 hover:text-white transition-all duration-300 ease-in-out group [background:linear-gradient(var(--color-purple-500),var(--color-purple-500))_padding-box,linear-gradient(var(--color-purple-500),var(--color-purple-200)_75%,transparent_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/50 before:rounded-full before:pointer-events-none shadow-sm" href="https://g.co/kgs/4P7Gca7" target="_blank" rel="noopener">
                                <div class="relative flex items-center flex-row text-white z-10 gap-3">
                                    <img src="{{url('frontend/images/google.svg')}}" class="w-6 h-6 -mb-0.25" alt="google logo">
                                    <h4 class="text-slate-300"><strong class="text-slate-100">5.0 </strong> rating</h4>
                                    <span class="tracking-normal text-purple-500 transition-transform group-hover:translate-x-0.5 duration-150 ease-in-out">-&gt;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <h1 class="h1 bg-clip-text text-transparent bg-linear-to-r from-slate-100/60 via-slate-200 to-slate-100/60 pb-4" data-aos="fade-down">Building custom software that <a class="bg-clip-text text-transparent bg-linear-to-r from-purple-400/90 via-pink-300 to-purple-400/90">eliminates</a> headache.</h1>
                    <p class="text-lg text-slate-300 mb-8" data-aos="fade-down" data-aos-delay="100">Custom-built to match your workflow, boost efficiency, and reduce daily stress — from concept to code, we turn complexity into clarity.</p>
                    <div class="max-w-xs mx-auto sm:max-w-none sm:inline-flex sm:justify-center space-y-4 sm:space-y-0 sm:space-x-4" data-aos="fade-down" data-aos-delay="200">
                        <div>
                            <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/alex-aqueduct/discovery-call?hide_event_type_details=1&hide_gdpr_banner=1&primary_color=9f7aea'});return false;">
                                 Book a free call <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                            </a>
                        </div>
                        <div>
                            <a class="btn text-slate-200 space-x-2 hover:text-white bg-slate-900/25 hover:bg-slate-900/30 w-full transition duration-150 ease-in-out" href="/projects">
                                <i class=" fas fa-folder-open"></i>
                                <span>Our projects</span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Clients Banner -->
    <section>
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">

            <!-- Particles animation -->
            <div class="absolute inset-0 max-w-6xl mx-auto px-4 sm:px-6">
                <div class="absolute inset-0 -z-10" aria-hidden="true">
                    <canvas data-particle-animation data-particle-quantity="5"></canvas>
                </div>
            </div>

            <div class="py-6 md:py-10">
                <div class="overflow-hidden">

                    <div class="inline-flex w-full flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
                        <ul class="flex animate-infinite-scroll items-center justify-center md:justify-start [&_img]:max-w-[160px] [&_img]:opacity-90 [&_li]:mx-8">
                            <li>
                                <img src="{{url('/frontend/images/client-spirec.png')}}" alt="Client 1">
                            </li>
                            <li>
                                <img src="{{url('/frontend/images/client-dinkar.png')}}" alt="Client 1">
                            </li>
                            <li>
                                <img src="{{url('/frontend/images/client-absoftware.png')}}" alt="Client 1">
                            </li>
                            <li>
                                <img src="{{url('/frontend/images/client-bb.png')}}" alt="Client 1">
                            </li>
                            <li>
                                <img src="{{url('/frontend/images/client-mera.png')}}" alt="Client 1">
                            </li>
                            <li>
                                <img src="{{url('/frontend/images/client-allround.png')}}" alt="Client 1">
                            </li>
                            <li>
                                <img src="{{url('/frontend/images/client-terner.png')}}" alt="Client 1">
                            </li>
                        </ul>
                        <ul class="flex animate-infinite-scroll items-center justify-center md:justify-start [&_img]:max-w-[160px] [&_img]:opacity-90 [&_li]:mx-8" aria-hidden="true">
                            <li>
                                <img src="{{url('/frontend/images/client-spirec.png')}}" alt="Client 1">
                            </li>
                            <li>
                                <img src="{{url('/frontend/images/client-dinkar.png')}}" alt="Client 1">
                            </li>
                            <li>
                               <img src="{{url('/frontend/images/client-absoftware.png')}}" alt="Client 1">
                            </li>
                            <li>
                                <img src="{{url('/frontend/images/client-bb.png')}}" alt="Client 1">
                            </li>
                            <li>
                                <img src="{{url('/frontend/images/client-mera.png')}}" alt="Client 1">
                            </li>
                            <li>
                                <img src="{{url('/frontend/images/client-allround.png')}}" alt="Client 1">
                            </li>
                            <li>
                                <img src="{{url('/frontend/images/client-terner.png')}}" alt="Client 1">
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- What we do  -->
    <section>
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">

            <!-- Illustration -->
            <div class="absolute -top-12 left-12 blur-2xl opacity-50 pointer-events-none -z-10" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                    <defs>
                        <linearGradient id="bs5-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                            <stop offset="0%" stop-color="#A855F7" />
                            <stop offset="100%" stop-color="#6366F1" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#bs5-a)" fill-rule="evenodd" d="m0 0 461 369-284 58z" transform="matrix(1 0 0 -1 0 427)" />
                </svg>
            </div>

            <div class="pt-16 pb-12 md:pt-52 md:pb-20">

                <div x-data="{ tab: '1' }">

                    <!-- Section content -->
                    <div class="max-w-xl mx-auto md:max-w-none flex flex-col md:flex-row md:space-x-8 lg:space-x-16 xl:space-x-20 space-y-8 space-y-reverse md:space-y-0">

                        <!-- Content -->
                        <div class="md:w-7/12 lg:w-1/2 order-1 md:order-none max-md:text-center" data-aos="fade-down">
                            <!-- Content #1 -->
                            <div>
                                <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Custom software development</div>
                            </div>
                            <h3 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-3">We turn your good ideas into great digital products.</h3>
                            <p class="text-lg text-slate-400 mb-8">With bespoke development and smart integrations, we create your digital idea and give it a heartbeat.</p>
                            <div class="mt-8 max-w-xs max-md:mx-auto space-y-2">
                                <button
                                    class="flex items-center text-sm font-medium text-slate-50 rounded-sm border bg-slate-800/25 w-full px-3 py-2 transition duration-150 ease-in-out hover:opacity-100"
                                    :class="tab !== '1' ? 'border-slate-700 opacity-50' : 'border-purple-700 shadow-sm shadow-purple-500/25'"
                                    @click.prevent="tab = '1'"
                                >
                                    <i class="fa-solid fa-bolt pr-2"></i>
                                    <span>AI automations</span>
                                </button>
                                <button
                                    class="flex items-center text-sm font-medium text-slate-50 rounded-sm border bg-slate-800/25 w-full px-3 py-2 transition duration-150 ease-in-out hover:opacity-100"
                                    :class="tab !== '2' ? 'border-slate-700 opacity-50' : 'border-purple-700 shadow-sm shadow-purple-500/25'"
                                    @click.prevent="tab = '2'"
                                >
                                    <i class="fa-solid fa-code-branch pr-2"></i>
                                    <span>Bespoke integrations</span>
                                </button>
                                <button
                                    class="flex items-center text-sm font-medium text-slate-50 rounded-sm border bg-slate-800/25 w-full px-3 py-2 transition duration-150 ease-in-out hover:opacity-100"
                                    :class="tab !== '3' ? 'border-slate-700 opacity-50' : 'border-purple-700 shadow-sm shadow-purple-500/25'"
                                    @click.prevent="tab = '3'"
                                >
                                    <i class="fa-solid fa-chart-line pr-2"></i>
                                    <span>Scaleable architecture</span>
                                </button>
                            </div>
                        </div>

                        <!-- Image -->
                        <div class="md:w-5/12 lg:w-1/2" data-aos="fade-up" data-aos-delay="100">
                            <div class="relative py-24 -mt-12">

                                <!-- Particles animation -->
                                <div class="absolute inset-0 -z-10">
                                    <canvas data-particle-animation data-particle-quantity="8" data-particle-staticity="30"></canvas>
                                </div>

                                <div class="flex items-center justify-center">
                                    <div class="relative w-48 h-48 flex justify-center items-center">
                                        <!-- Halo effect -->
                                        <svg class="absolute inset-0 -z-10 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 will-change-transform pointer-events-none blur-md" width="480" height="480" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <linearGradient id="pulse-a" x1="50%" x2="50%" y1="100%" y2="0%">
                                                    <stop offset="0%" stop-color="#A855F7" />
                                                    <stop offset="76.382%" stop-color="#FAF5FF" />
                                                    <stop offset="100%" stop-color="#6366F1" />
                                                </linearGradient>
                                            </defs>
                                            <g fill-rule="evenodd">
                                                <path class="pulse" fill="url(#pulse-a)" fill-rule="evenodd" d="M240,0 C372.5484,0 480,107.4516 480,240 C480,372.5484 372.5484,480 240,480 C107.4516,480 0,372.5484 0,240 C0,107.4516 107.4516,0 240,0 Z M240,88.8 C156.4944,88.8 88.8,156.4944 88.8,240 C88.8,323.5056 156.4944,391.2 240,391.2 C323.5056,391.2 391.2,323.5056 391.2,240 C391.2,156.4944 323.5056,88.8 240,88.8 Z"></path>
                                                <path class="pulse pulse-1" fill="url(#pulse-a)" fill-rule="evenodd" d="M240,0 C372.5484,0 480,107.4516 480,240 C480,372.5484 372.5484,480 240,480 C107.4516,480 0,372.5484 0,240 C0,107.4516 107.4516,0 240,0 Z M240,88.8 C156.4944,88.8 88.8,156.4944 88.8,240 C88.8,323.5056 156.4944,391.2 240,391.2 C323.5056,391.2 391.2,323.5056 391.2,240 C391.2,156.4944 323.5056,88.8 240,88.8 Z"></path>
                                                <path class="pulse pulse-2" fill="url(#pulse-a)" fill-rule="evenodd" d="M240,0 C372.5484,0 480,107.4516 480,240 C480,372.5484 372.5484,480 240,480 C107.4516,480 0,372.5484 0,240 C0,107.4516 107.4516,0 240,0 Z M240,88.8 C156.4944,88.8 88.8,156.4944 88.8,240 C88.8,323.5056 156.4944,391.2 240,391.2 C323.5056,391.2 391.2,323.5056 391.2,240 C391.2,156.4944 323.5056,88.8 240,88.8 Z"></path>
                                            </g>
                                        </svg>
                                        <!-- Grid -->
                                        <div class="absolute inset-0 -z-10 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none w-[500px] h-[500px] rounded-full overflow-hidden [mask-image:_radial-gradient(black,_transparent_60%)]">
                                            <div class="h-[200%] animate-endless">
                                                <div class="absolute inset-0 [background:repeating-linear-gradient(transparent,transparent_48px,var(--color-white)_48px,var(--color-white)_49px)] blur-[2px] opacity-20"></div>
                                                <div class="absolute inset-0 [background:repeating-linear-gradient(transparent,transparent_48px,var(--color-purple-500)_48px,var(--color-purple-500)_49px)]"></div>
                                                <div class="absolute inset-0 [background:repeating-linear-gradient(90deg,transparent,transparent_48px,var(--color-white)_48px,var(--color-white)_49px)] blur-[2px] opacity-20"></div>
                                                <div class="absolute inset-0 [background:repeating-linear-gradient(90deg,transparent,transparent_48px,var(--color-purple-500)_48px,var(--color-purple-500)_49px)]"></div>
                                            </div>
                                        </div>
                                        <!-- Icons -->
                                        <div
                                            x-show="tab === '1'"
                                            x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 order-first"
                                            x-transition:enter-start="opacity-0 -rotate-[60deg]"
                                            x-transition:enter-end="opacity-100 rotate-0"
                                            x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 absolute"
                                            x-transition:leave-start="opacity-100 rotate-0"
                                            x-transition:leave-end="opacity-0 rotate-[60deg]"
                                        >
                                            <div class="relative flex items-center justify-center w-16 h-16 border border-transparent rounded-2xl shadow-2xl -rotate-[14deg] [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-2xl">
                                                <svg class="relative fill-slate-200" xmlns="http://www.w3.org/2000/svg" width="23" height="25">
                                                    <path fill-rule="nonzero" d="M10.55 15.91H.442L14.153.826 12.856 9.91h10.107L9.253 24.991l1.297-9.082Zm.702-8.919L4.963 13.91h7.893l-.703 4.918 6.289-6.918H10.55l.702-4.918Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            x-show="tab === '2'"
                                            x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 order-first"
                                            x-transition:enter-start="opacity-0 -rotate-[60deg]"
                                            x-transition:enter-end="opacity-100 rotate-0"
                                            x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 absolute"
                                            x-transition:leave-start="opacity-100 rotate-0"
                                            x-transition:leave-end="opacity-0 rotate-[60deg]"
                                        >
                                            <div class="relative flex items-center justify-center w-16 h-16 border border-transparent rounded-2xl shadow-2xl -rotate-[14deg] [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-2xl">
                                                <svg class="relative fill-slate-200" xmlns="http://www.w3.org/2000/svg" width="22" height="22">
                                                    <path d="M18 14h-2V8h2c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4v2H8V4c0-2.2-1.8-4-4-4S0 1.8 0 4s1.8 4 4 4h2v6H4c-2.2 0-4 1.8-4 4s1.8 4 4 4 4-1.8 4-4v-2h6v2c0 2.2 1.8 4 4 4s4-1.8 4-4-1.8-4-4-4ZM16 4c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2h-2V4ZM2 4c0-1.1.9-2 2-2s2 .9 2 2v2H4c-1.1 0-2-.9-2-2Zm4 14c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2h2v2ZM8 8h6v6H8V8Zm10 12c-1.1 0-2-.9-2-2v-2h2c1.1 0 2 .9 2 2s-.9 2-2 2Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            x-show="tab === '3'"
                                            x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 order-first"
                                            x-transition:enter-start="opacity-0 -rotate-[60deg]"
                                            x-transition:enter-end="opacity-100 rotate-0"
                                            x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 absolute"
                                            x-transition:leave-start="opacity-100 rotate-0"
                                            x-transition:leave-end="opacity-0 rotate-[60deg]"
                                        >
                                            <div class="relative flex items-center justify-center w-16 h-16 border border-transparent rounded-2xl shadow-2xl -rotate-[14deg] [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-2xl">
                                                <svg class="relative fill-slate-200" xmlns="http://www.w3.org/2000/svg" width="26" height="14">
                                                    <path fill-rule="nonzero" d="m10 5.414-8 8L.586 12 10 2.586l6 6 8-8L25.414 2 16 11.414z" />
                                                </svg>
                                            </div>
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

    <!-- Our Projects -->
    <section class="relative">

        <!-- Particles animation -->
        <div class="absolute left-1/2 -translate-x-1/2 top-0 -z-10 w-80 h-80 -mt-24 -ml-32">
            <div class="absolute inset-0 -z-10" aria-hidden="true">
                <canvas data-particle-animation data-particle-quantity="6" data-particle-staticity="30"></canvas>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-16 md:pt-32">

                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <div>
                        <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Simple. Scaleable. Stunning.</div>
                    </div>
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Our projects</h2>
                    <p class="text-lg text-slate-400">From napkin-sketch to launch day. Explore some of the custom-built solutions we’ve delivered for our clients.</p>
                </div>

                <!-- Highlighted boxes -->
                <div class="relative pb-12 md:pb-20">
                    <!-- Blurred shape -->
                    <div class="absolute bottom-0 -mb-20 left-1/2 -translate-x-1/2 blur-2xl opacity-50 pointer-events-none" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                            <defs>
                                <linearGradient id="bs2-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                    <stop offset="0%" stop-color="#6366F1" />
                                    <stop offset="100%" stop-color="#6366F1" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                            <path fill="url(#bs2-a)" fill-rule="evenodd" d="m346 898 461 369-284 58z" transform="translate(-346 -898)" />
                        </svg>
                    </div>
                    <!-- Grid -->
                    <div class="grid md:grid-cols-12 gap-6" data-highlighter>
                        <!-- Box #1 -->
                        <div class="md:col-span-12" data-aos="fade-down">
                            <div class="relative group h-full bg-slate-800 rounded-3xl p-px before:absolute before:w-96 before:h-96 before:-left-48 before:-top-48 before:bg-purple-500 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] hover:before:opacity-20 before:z-30 before:blur-[100px] after:absolute after:inset-0 after:rounded-[inherit] after:opacity-0 after:transition-opacity after:duration-500 after:[background:radial-gradient(250px_circle_at_var(--mouse-x)_var(--mouse-y),var(--color-slate-400),transparent)] group-hover:after:opacity-100 after:z-10 overflow-hidden">
                                <div class="relative h-full bg-slate-900 rounded-[inherit] z-20 overflow-hidden">
                                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                        <!-- Blurred shape -->
                                        <div class="absolute right-0 top-0 blur-2xl" aria-hidden="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="342" height="393">
                                                <defs>
                                                    <linearGradient id="bs-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                                        <stop offset="0%" stop-color="#6366F1" />
                                                        <stop offset="100%" stop-color="#6366F1" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#bs-a)" fill-rule="evenodd" d="m104 .827 461 369-284 58z" transform="translate(0 -112.827)" opacity=".7" />
                                            </svg>
                                        </div>
                                        <!-- Radial gradient -->
                                        <div class="absolute flex items-center justify-center bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 h-full aspect-square" aria-hidden="true">
                                            <div class="absolute inset-0 translate-z-0 bg-purple-500/50 md:bg-purple-500 rounded-full blur-[120px] opacity-70"></div>
                                            <div class="absolute w-1/4 h-1/4 translate-z-0 bg-purple-500/50 md:bg-purple-400 rounded-full blur-[40px]"></div>
                                        </div>


                                        <!-- Text -->
                                        <div class="md:max-w-[480px] w-full order-1 md:order-none p-6 pt-0 md:p-8 md:pr-0">
                                            <div class="mb-5">
                                                <div>
                                                    <img class="mb-2 w-full max-w-48 " src="{{url('frontend/images/client-dinkar.png')}}" alt="Feature 01">
                                                    <h3 class="inline-flex text-xl font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-100/80 via-slate-100 to-slate-100/80 pb-1">Custom event managment system</h3>
                                                    <p class="text-slate-400">A complete event managment, CRM, ticket sales and dashboard suite with seamless integrations between the platform, payment proccessors and external databases through APIs. </p>
                                                </div>
                                            </div>
                                            <div>
                                                <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="/projects/dinkar">
                                                    <span class="relative inline-flex items-center">
                                                        See project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <div class="md:block hidden relative w-full min-h-64 md:h-auto max-h-72">
                                            <img class="absolute top-10 z-10 left-1/2 -translate-x-1/2 w-full max-w-[500px] mx-auto md:relative md:left-0 md:translate-x-0 rounded-md border border-gray-400/40 transition-all duration-500 ease-in-out transform group-hover:shadow-2xl group-hover:shadow-purple-500/50 group-hover:scale-103 group-hover:translate-y-[-5px]" src="{{url('frontend/images/dinkar-screenshot.jpg')}}" alt="Feature 01">
                                            <div class="relative w-full -mb-24 group">
                                                <div class="absolute z-0 hidden bg-purple-500 rounded-full opacity-50 sm:block size-24 blur-3xl bottom-64 left-48"></div>
                                                <div class="absolute z-0 hidden bg-purple-500 rounded-full opacity-50 sm:block size-24 blur-3xl bottom-64 right-48"></div>
                                                <img src="{{url('/frontend/images/ticket.png')}}" alt="Skärmdump av en biljett från Dinkår-appen som visar detaljerad biljettinformation för ett event" class="absolute md:block hidden inset-0 z-10 m-auto -rotate-12 w-32 bottom-12 right-48 transition-all duration-500 ease-in-out transform group-hover:translate-y-[-10px] group-hover:scale-110 group-hover:translate-x-[-20px]">
                                                <img src="{{url('/frontend/images/ticket.png')}}" alt="Skärmdump av en biljett från Dinkår-appen som visar detaljerad biljettinformation för ett evenemang" class="absolute md:block hidden inset-0 z-10 m-auto rotate-12 w-32 bottom-12 left-48 transition-all duration-500 ease-in-out transform group-hover:translate-y-[-10px] group-hover:scale-110 group-hover:translate-x-[20px]">
                                                <img src="{{url('/frontend/images/ticket.png')}}" alt="Skärmdump av Dinkår-appens evenemangssida med möjlighet att köpa biljetter" class="relative md:block hidden m-auto z-20 w-44 rounded-xl transition-all duration-500 ease-in-out transform group-hover:translate-y-[-20px] group-hover:scale-105">
                                            </div>
                                        </div>
                                        <div class="md:hidden relative pb-4">
                                            <img src="{{url('frontend/images/dinkar-screenshot.jpg')}}" class="rounded-t-md object-cover object-left-top border-gray-400/40 w-full z-20 transition-all max-h-64 duration-500 ease-in-out transform group-hover:shadow-2xl group-hover:shadow-purple-500 group-hover:scale-103 group-hover:translate-y-[-5px]" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Box #2 -->
                        <div class="md:col-span-7" data-aos="fade-down">
                            <div class="relative group h-full bg-slate-800 rounded-3xl p-px before:absolute before:w-96 before:h-96 before:-left-48 before:-top-48 before:bg-purple-500 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] hover:before:opacity-20 before:z-30 before:blur-[100px] after:absolute after:inset-0 after:rounded-[inherit] after:opacity-0 after:transition-opacity after:duration-500 after:[background:radial-gradient(250px_circle_at_var(--mouse-x)_var(--mouse-y),var(--color-slate-400),transparent)] group-hover:after:opacity-100 after:z-10 overflow-hidden">
                                <div class="relative h-full bg-slate-900 rounded-[inherit] z-20 overflow-hidden">
                                    <div class="flex flex-col">
                                        <!-- Radial gradient -->
                                        <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square" aria-hidden="true">
                                            <div class="absolute inset-0 translate-z-0 bg-slate-800 rounded-full blur-[80px]"></div>
                                        </div>
                                        <!-- Text -->
                                        <div class="w-full shrink-0 order-1 md:order-none p-6 pt-0 md:p-8">
                                            <div>
                                                <div class="w-full justify-between flex mb-2 items-center">
                                                    <img class=" w-full max-w-32 " src="{{url('frontend/images/autovis.png')}}" alt="Feature 01">
                                                    <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="/projects/integrations/autotask-visma">
                                                        <span class="relative inline-flex items-center">
                                                            See Project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <h3 class="inline-flex text-xl font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-100/80 via-slate-100 to-slate-100/80 pb-1">Autotask/Visma financial integration</h3>
                                                <p class="text-slate-400">A robust two-way API integration that syncs invoicing, articles and customer data between Autotask & Visma.</p>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <div class="md:block hidden relative w-full min-h-64 md:h-auto max-h-72">
                                            <img class="relative mx-auto md:absolute rounded-md border border-gray-400/40 md:top-0 md:left-24 max-w-[600px] z-20 transition-all duration-500 ease-in-out transform group-hover:shadow-2xl group-hover:shadow-purple-500 group-hover:scale-103 group-hover:translate-y-[-5px]" src="{{url('frontend/images/autovis2.png')}}" alt="Feature 03">
                                            <div class="absolute z-10 hidden bg-purple-500 rounded-full opacity-90 sm:block size-92 blur-3xl -bottom-32 left-24"></div>
                                        </div>
                                        <div class="md:hidden relative pb-4">
                                            <img src="{{url('frontend/images/autovis2.png')}}" class="rounded-t-md object-cover object-left-top border-gray-400/40 w-full z-20 transition-all max-h-64 duration-500 ease-in-out transform group-hover:shadow-2xl group-hover:shadow-purple-500 group-hover:scale-103 group-hover:translate-y-[-5px]" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Box #3 -->
                        <div class="md:col-span-5" data-aos="fade-down">
                            <div class="relative h-full group bg-slate-800 rounded-3xl p-px before:absolute before:w-96 before:h-96 before:-left-48 before:-top-48 before:bg-purple-500 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] hover:before:opacity-20 before:z-30 before:blur-[100px] after:absolute after:inset-0 after:rounded-[inherit] after:opacity-0 after:transition-opacity after:duration-500 after:[background:radial-gradient(250px_circle_at_var(--mouse-x)_var(--mouse-y),var(--color-slate-400),transparent)] group-hover:after:opacity-100 after:z-10 overflow-hidden">
                                <div class="relative h-full bg-slate-900 rounded-[inherit] z-20 overflow-hidden">
                                    <div class="flex flex-col">
                                        <!-- Radial gradient -->
                                        <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square" aria-hidden="true">
                                            <div class="absolute inset-0 translate-z-0 bg-slate-800 rounded-full blur-[80px]"></div>
                                        </div>
                                        <!-- Text -->
                                        <div class="md:max-w-[480px] order-1 md:order-none relative z-10 shrink-0 p-6 pt-0 md:p-8">
                                            <div>
                                                <div class="w-full justify-between flex mb-2 items-center">
                                                    <img class=" w-full max-w-32 " src="{{url('frontend/images/client-spirec.png')}}" alt="Feature 01">
                                                    <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="/projects/spirec">
                                                        <span class="relative inline-flex items-center">
                                                            See Project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <h3 class="inline-flex text-xl font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-100/80 via-slate-100 to-slate-100/80 pb-1">Fully automated stock control system</h3>
                                                <p class="text-slate-400">Bespoke e-commerce order-fulfillment system that deeply integrates with Shopifys API.</p>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <div class="md:block hidden relative w-full h-64 md:h-auto max-h-72 md:pb-8">
                                            <img class="absolute rounded-md border border-gray-400/40 bottom-0 left-1/2 -translate-x-1/2 mx-auto max-w-64 md:relative md:left-0 md:translate-x-0 z-20 transition-all duration-500 ease-in-out transform group-hover:shadow-2xl group-hover:shadow-purple-500/80 group-hover:scale-103 group-hover:translate-y-[-5px]" src="{{url('frontend/images/spirec2.png')}}" alt="Feature 03">
                                            <div class="absolute z-0 hidden bg-purple-500 rounded-full opacity-90 sm:block size-64 blur-3xl -bottom-24 left-1/2 -translate-x-1/2"></div>
                                        </div>
                                        <div class="md:hidden relative pb-4">
                                            <img src="{{url('frontend/images/spirec-screenshot.png')}}" class="rounded-t-md object-cover object-left-top border-gray-400/40 w-full z-20 transition-all max-h-64 duration-500 ease-in-out transform group-hover:shadow-2xl group-hover:shadow-purple-500 group-hover:scale-103 group-hover:translate-y-[-5px]" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features list -->
                <div class=" flex flex-col justify-center items-center md:grid md:grid-cols-3 gap-8 md:gap-12">
                    <!-- Feature -->
                    <div class="w-full flex flex-col items-center justify-center">
                        <div class="flex items-center space-x-2 mb-1">
                            <i class="fas fa-circle-check pr-1"></i>
                            <h4 class="font-medium text-slate-50">Simple</h4>
                        </div>
                        <p class="text-sm text-slate-400">We craft software that feels natural and intuitive to simplify your workflow."</p>
                    </div>
                    <!-- Feature -->
                    <div class="w-full flex flex-col items-center justify-center">
                        <div class="flex items-center space-x-2 mb-1">
                            <i class="fas fa-chart-line pr-1"></i>
                            <h4 class="font-medium text-slate-50">Scaleable</h4>
                        </div>
                        <p class="text-sm text-slate-400">Built to grow with your business, no matter the size.</p>
                    </div>
                    <!-- Feature -->
                    <div class="w-full flex flex-col items-center justify-center">
                        <div class="flex items-center space-x-2 mb-1">
                            <i class="fas fa-mountain-sun pr-1"></i>
                            <h4 class="font-medium text-slate-50">Stunning</h4>
                        </div>
                        <p class="text-sm text-slate-400">So that your product looks and feels as good as it performs.</p>
                    </div>
                </div>
                <div class="text-center pt-12">
                    <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="/projects">
                        <span class="relative inline-flex items-center">
                            More projects <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our services -->
    <section>
        <div class="max-w-6xl mx-auto px-4  sm:px-6">
            <div class="pt-28 md:pt-40">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 md:pb-20">
                    <div>
                        <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Our Services</div>
                    </div>
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">How we can help you succeed.</h2>
                    <p class="text-lg text-slate-400">We provide systems and bespoke services designed to position your business at the forefront of your industry.</p>
                </div>

                <!-- Carousel built with Swiper.js [https://swiperjs.com/] -->
                <!-- * Initialized in src/js/main.js -->
                <!-- * Custom styles in src/css/additional-styles/theme.scss -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <!-- Carousel items -->
                            <div class="group" data-highlighter>
                                <div class="col-span-1 h-auto relative bg-slate-800 rounded-3xl p-px before:absolute before:w-96 before:h-96 before:-left-48 before:-top-48 before:bg-purple-500 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] hover:before:opacity-20 before:z-30 before:blur-[100px] after:absolute after:inset-0 after:rounded-[inherit] after:opacity-0 after:transition-opacity after:duration-500 after:[background:radial-gradient(250px_circle_at_var(--mouse-x)_var(--mouse-y),var(--color-slate-400),transparent)] group-hover:after:opacity-100 after:z-10 overflow-hidden">
                                    <div class="relative h-full bg-slate-900 rounded-[inherit] z-20 overflow-hidden">
                                        <!-- Particles animation -->
                                        <div class="absolute inset-0 -z-10 opacity-0 group-[.swiper-slide-active]/slide:opacity-100 group-hover/slide:opacity-100 transition-opacity duration-500 ease-in-out" aria-hidden="true">
                                            <canvas data-particle-animation data-particle-quantity="3"></canvas>
                                        </div>
                                        <!-- Radial gradient -->
                                        <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/4 aspect-square" aria-hidden="true">
                                            <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-3xl"></div>
                                        </div>
                                        <div class="flex flex-col p-6 h-full">
                                            <div class="size-16 rounded-full border border-slate-400 text-white flex items-center justify-center mb-3 bg-[radial-gradient(circle,theme(colors.slate.700)_0%,theme(colors.slate.900)_100%)]">
                                                <i class="fas text-lg fa-network-wired"></i>
                                            </div>
                                            <div class="grow mb-4">
                                                <div class="font-bold text-lg mb-2">Custom webapps</div>
                                                <div class="text-slate-400 mb-3">Crafted specifically for your needs, our web applications make your processes faster, smarter, and more efficient.</div>
                                            </div>
                                            <!--<a class="btn-sm w-fit ml-auto text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="#0">
                                                <span class="relative inline-flex items-center">
                                                    Learn More <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                                </span>
                                            </a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group" data-highlighter>
                                <div class="col-span-1 h-auto relative bg-slate-800 rounded-3xl p-px before:absolute before:w-96 before:h-96 before:-left-48 before:-top-48 before:bg-purple-500 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] hover:before:opacity-20 before:z-30 before:blur-[100px] after:absolute after:inset-0 after:rounded-[inherit] after:opacity-0 after:transition-opacity after:duration-500 after:[background:radial-gradient(250px_circle_at_var(--mouse-x)_var(--mouse-y),var(--color-slate-400),transparent)] group-hover:after:opacity-100 after:z-10 overflow-hidden">
                                    <div class="relative h-full bg-slate-900 rounded-[inherit] z-20 overflow-hidden">
                                        <!-- Particles animation -->
                                        <div class="absolute inset-0 -z-10 opacity-0 group-[.swiper-slide-active]/slide:opacity-100 group-hover/slide:opacity-100 transition-opacity duration-500 ease-in-out" aria-hidden="true">
                                            <canvas data-particle-animation data-particle-quantity="3"></canvas>
                                        </div>
                                        <!-- Radial gradient -->
                                        <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/4 aspect-square" aria-hidden="true">
                                            <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-3xl"></div>
                                        </div>
                                        <div class="flex flex-col p-6 h-full">
                                                <div class="size-16 rounded-full border border-slate-400 text-white flex items-center justify-center mb-3 bg-[radial-gradient(circle,theme(colors.slate.700)_0%,theme(colors.slate.900)_100%)]">
                                                    <i class="fas text-lg fa-code-branch"></i>
                                                </div>
                                                <div class="grow mb-4">
                                                <div class="font-bold text-lg mb-2">System integrations</div>
                                                <div class="text-slate-400 mb-3">Eliminate monotonous tasks by dynamically synchronizing all of your systems into one smart workflow.</div>
                                            </div>
                                            <!--<a class="btn-sm w-fit ml-auto text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="#0">
                                                <span class="relative inline-flex items-center">
                                                    Learn More <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                                </span>
                                            </a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group" data-highlighter>
                                <div class="col-span-1 h-auto relative bg-slate-800 rounded-3xl p-px before:absolute before:w-96 before:h-96 before:-left-48 before:-top-48 before:bg-purple-500 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] hover:before:opacity-20 before:z-30 before:blur-[100px] after:absolute after:inset-0 after:rounded-[inherit] after:opacity-0 after:transition-opacity after:duration-500 after:[background:radial-gradient(250px_circle_at_var(--mouse-x)_var(--mouse-y),var(--color-slate-400),transparent)] group-hover:after:opacity-100 after:z-10 overflow-hidden">
                                    <div class="relative h-full bg-slate-900 rounded-[inherit] z-20 overflow-hidden">
                                    <!-- Particles animation -->
                                    <div class="absolute inset-0 -z-10 opacity-0 group-[.swiper-slide-active]/slide:opacity-100 group-hover/slide:opacity-100 transition-opacity duration-500 ease-in-out" aria-hidden="true">
                                        <canvas data-particle-animation data-particle-quantity="3"></canvas>
                                    </div>
                                    <!-- Radial gradient -->
                                    <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/4 aspect-square" aria-hidden="true">
                                        <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-3xl"></div>
                                    </div>
                                    <div class="flex flex-col p-6 h-full">
                                        <div class="size-16 rounded-full border border-slate-500 text-white flex items-center justify-center mb-3 bg-[radial-gradient(circle,theme(colors.slate.700)_0%,theme(colors.slate.900)_100%)]">
                                            <i class="fas text-lg fa-screwdriver-wrench"></i>
                                        </div>
                                        <div class="grow mb-4">
                                            <div class="font-bold text-lg mb-2">Support & maintenance</div>
                                            <div class="text-slate-400 mb-3">Protect your investment with proactive support that keeps your software reliable, secure, and evolving with you.</div>
                                        </div>
                                        <!--<a class="btn-sm w-fit ml-auto text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="#0">
                                            <span class="relative inline-flex items-center">
                                                Learn More <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                            </span>
                                        </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Our proccess -->
    <section class="relative pt-28 md:pt-40">

        <!-- Particles animation -->
        <div class="absolute left-1/2 -translate-x-1/2 top-0 -z-10 w-64 h-64 -mt-24">
            <div class="absolute inset-0 -z-10" aria-hidden="true">
                <canvas data-particle-animation data-particle-quantity="6" data-particle-staticity="30"></canvas>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pb-12 md:pb-20">

                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12">
                    <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Our Process</div>
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Our done-for-you proccess.</h2>
                    <p class="text-lg text-slate-400">From idea to launch, we handle every detail — so you can focus on what you do best.</p>
                </div>

                <!-- Rings illustration -->
                <div class="text-center pb-8">
                    <div class="inline-flex items-center justify-center relative">
                        <!-- Particles animation -->
                        <div class="absolute inset-0 -z-10" aria-hidden="true">
                            <canvas data-particle-animation data-particle-quantity="10"></canvas>
                        </div>
                        <div class="inline-flex">
                            <img src="{{ url('frontend/images/pricing-illustration.svg') }}" width="200" alt="Features illustration" />
                        </div>
                        <img class="absolute -mt-[40%]" src="{{ url('frontend/images/pricing-illustration-top.svg') }}" width="396" height="328" alt="Features illustration top" aria-hidden="true" />
                        <div class="absolute w-[300%] flex items-center justify-center space-x-5">
                            <div class="-rotate-[4deg]">
                                <img class="w-11 h-11 drop-shadow-lg animate-[float_2.6s_ease-in-out_infinite] opacity-10" src="{{ url('frontend/images/pricing-icon-01.svg') }}" width="80" height="80" alt="Pricing icon 01" />
                            </div>
                            <div class="rotate-[4deg]">
                                <img class="w-14 h-14 drop-shadow-lg animate-[float_2.4s_ease-in-out_infinite] opacity-25" src="{{ url('frontend/images/pricing-icon-02.svg') }}" width="80" height="80" alt="Pricing icon 02" />
                            </div>
                            <div class="-rotate-[4deg]">
                                <img class="w-16 h-16 drop-shadow-lg animate-[float_2.2s_ease-in-out_infinite] opacity-60" src="{{ url('frontend/images/pricing-icon-03.svg') }}" width="80" height="80" alt="Pricing icon 03" />
                            </div>
                            <img class="drop-shadow-lg animate-float" src="{{ url('frontend/images/pricing-icon-04.svg') }}" width="80" height="80" alt="Pricing icon 04" />
                            <div class="rotate-[4deg]">
                                <img class="w-16 h-16 drop-shadow-lg animate-[float_2.2s_ease-in-out_infinite] opacity-60" src="{{ url('frontend/images/pricing-icon-05.svg') }}" width="80" height="80" alt="Pricing icon 05" />
                            </div>
                            <div class="-rotate-[4deg]">
                                <img class="w-14 h-14 drop-shadow-lg animate-[float_2.4s_ease-in-out_infinite] opacity-25" src="{{ url('frontend/images/pricing-icon-06.svg') }}" width="80" height="80" alt="Pricing icon 06" />
                            </div>
                            <div class="rotate-[4deg]">
                                <img class="w-11 h-11 drop-shadow-lg animate-[float_2.6s_ease-in-out_infinite] opacity-10" src="{{ url('frontend/images/pricing-icon-07.svg') }}" width="80" height="80" alt="Pricing icon 07" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features list -->
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Card #1 -->
                    <div class="bg-linear-to-tr from-slate-800/50 to-slate-800/10 rounded-3xl border border-slate-800">
                        <div class="flex items-center space-x-4 p-4 h-full">
                            <div class="inline-flex font-medium bg-clip-text text-transparent text-xl bg-linear-to-r from-purple-500 to-purple-200 px-2">1</div>
                            <div>
                                <h3 class="text-lg text-slate-100 font-bold mb-1">Discover & define</h3>
                                <p class="text-sm text-slate-400">We start with a focused conversation to understand your goals, challenges, and <strong class="text-slate-200">what success looks like.</strong> Then craft a roadmap to get you there.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card #2 -->
                    <div class="bg-linear-to-tr from-slate-800/50 to-slate-800/10 rounded-3xl border border-slate-800">
                        <div class="flex items-center space-x-4 p-4 h-full">
                            <div class="inline-flex font-medium bg-clip-text text-transparent text-xl bg-linear-to-r from-purple-500 to-purple-200 px-2">2</div>
                            <div>
                                <h3 class="text-lg text-slate-100 font-bold mb-1">Design & Build</h3>
                                <p class="text-sm text-slate-400">From UX design to code, we handle the full development process. No jargon, <strong class="text-slate-200">no stress</strong> just consistent updates while we build behind the scenes.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card #3 -->
                    <div class="bg-linear-to-tr from-slate-800/50 to-slate-800/10 rounded-3xl border border-slate-800">
                        <div class="flex items-center space-x-4 p-4 h-full">
                            <div class="inline-flex font-medium bg-clip-text text-transparent text-xl bg-linear-to-r from-purple-500 to-purple-200 px-2">3</div>
                            <div>
                                <h3 class="text-lg text-slate-100 font-bold mb-1">Launch & support</h3>
                                <p class="text-sm text-slate-400">Once everything's tested and ready, we launch the software and <strong class="text-slate-200">stay by your side</strong> with maintenance, support, and improvements.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-12">
                    <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="/method">
                        <span class="relative inline-flex items-center">
                            Read more about our proccess <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Customers -->
    <section class="relative">
        <!-- Radial gradient -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none -z-10" aria-hidden="true">
            <div class="absolute flex items-center justify-center top-0 -translate-y-1/2 left-1/2 -translate-x-1/2 w-1/3 aspect-square">
                <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-[120px] opacity-50"></div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20">
                <!-- Content -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                     <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Our Clients</div>
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Kind words from happy clients.</h2>
                    <p class="text-lg text-slate-400">Hear from our clients themselves - genuine feedback that reflects the ease, care and results we deliver with every project.</p>
                </div>
                <!-- Customers -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 max-w-md mx-auto md:max-w-none">
                    <!-- Customer #01 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="{{ url('/frontend/images/axel.jpeg') }}" width="44" height="44" alt="Customer 01" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Axel Björkqvist</div>
                                    <p class="text-sm text-slate-500 font-medium truncate" >Spirec AB</p>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">Our custom system connects Shopify and Meta ads, tracks stock, orders, and ad performance – all in one place. It's fast, easy to use, and has saved us so much time. Couldn’t run the business without it.</p>
                    </div>
                    <!-- Customer #02 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="{{ url('/frontend/images/darren.jpg') }}" width="44" height="44" alt="Customer 01" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Darren Round</div>
                                    <p class="text-sm text-slate-500 font-medium truncate" >AB Software</p>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">Aqueduct Software built us a custom financial integration that saved hours of manual work every week. Everything runs smoothly now across our systems, and their team made a complex process feel easy.</p>
                    </div>
                    <!-- Customer #03 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="{{ url('/frontend/images/will.jpeg') }}" width="44" height="44" alt="Customer 01" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Will Rushmere</div>
                                    <p class="text-sm text-slate-500 font-medium truncate" >Good for Pets Co.</p>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">We had custom code added to our Shopify store and the difference is night and day. Everything feels faster, smoother, and more user-friendly. Our customers noticed it right away – and so did our conversion rate.</p>
                    </div>
                    <!-- Customer #04 -->
                    <div class="hidden md:block relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="{{ url('/frontend/images/lucas.jpeg') }}" width="44" height="44" alt="Customer 01" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Lucas Dunberg</div>
                                    <p class="text-sm text-slate-500 font-medium truncate" >Intern at Aqueduct</p>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">Very professional websites! The support and assistance you receive, along with the knowledge and expertise behind every decision made, are extraordinary. Highly recommended!</p>
                    </div>
                    <!-- Customer #05 -->
                    <div class="hidden md:block relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="{{ url('/frontend/images/vidar.png') }}" width="44" height="44" alt="Customer 01" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Vidar Lindblad</div>
                                    <p class="text-sm text-slate-500 font-medium truncate" >Beach Burgers</p>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">We needed a simple website, and Alex from Aqueduct delivered something that looks and feels amazing. It's clean, fast, and exactly what we wanted - just way better than we expected.</p>
                    </div>
                    <!-- Customer #06 -->
                    <div class=" hidden md:block relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="{{ url('/frontend/images/einar.png') }}" width="44" height="44" alt="Customer 01" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Einar Arnell</div>
                                    <p class="text-sm text-slate-500 font-medium truncate" >User of DinKår</p>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">Dinkår has made our job so much easier. We handle memberships, sell tickets, and check people in at events – all in the same system. Super easy to use and saves us a ton of time. Wouldn’t go back.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <x-cta></x-cta>

</x-layout>
