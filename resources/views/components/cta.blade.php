    <section>
        <div class="max-w-6xl mx-auto">
            <div class="relative p-6 md:p-16  rounded-3xl overflow-hidden">
                <!-- Radial gradient -->
                <div class="absolute flex items-center justify-center top-24 translate-x-1/2 -translate-y-1/2 left-1/2 pointer-events-none -z-10 w-1/3 aspect-square" aria-hidden="true">
                    <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-[120px] opacity-70"></div>
                    <div class="absolute w-1/4 h-1/4 translate-z-0 bg-purple-400 rounded-full blur-[40px]"></div>
                </div>
                <!-- Blurred shape -->
                <div class="absolute bottom-0 translate-y-1/2 left-0 blur-2xl opacity-50 pointer-events-none -z-10" aria-hidden="true">
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
                <!-- Content -->
                <div class="w-full bg-slate-900/40 bg-clip-padding backdrop-filter backdrop-blur-md border border-gray-100/20 rounded-3xl px-4 py-12 sm:px-6">
                    <div class="max-w-3xl mx-auto text-center">
                        <div>
                            <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Lets talk</div>
                        </div>
                        <h2 class="h2 text-slate-100 pb-4">Ready to automate busywork?</h2>
                        <p class="text-lg text-slate-400 mb-8">Not sure where to start? Let’s talk through some actionable ideas tailored to your business, no strings attached. Expect zero fluff, just useful advice and clarity on your next step.</p>

                        <div class="w-full flex flex-col items-center justify-center">
                            <div class="bg-slate-900/40 p-6 space-y-4 pr-8 bg-clip-padding backdrop-filter backdrop-blur-md border  border-gray-100/20 rounded-3xl ">
                                <div class="flex items-center justify-start w-full">
                                    <img class="w-16 h-16 rounded-full mx-auto " src="{{ url('frontend/images/me.png') }}" alt="Alex">
                                    <div class="w-full text-left pl-4">
                                        <p class="text-md font-bold text-slate-100">Alexander Round</p>
                                        <p class="text-md text-slate-400">CEO</p>
                                    </div>
                                </div>
                                <div>
                                    <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 group" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/alex-aqueduct/discovery-call?hide_event_type_details=1&hide_gdpr_banner=1&primary_color=9f7aea'});return false;">
                                        Book a call with me<span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                    </a>
                                </div>
                            </div>
                            <div class="w-full text-center pb-2 pt-4 md:pb-2 md:pt-4">
                                <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">or</div>
                            </div>
                            <div class="w-full grid grid-cols-1 md:grid-cols-2 divide-gray-100/20 md:divide-x">
                                <p class="text-center md:text-right md:pr-4 text-slate-400">alex@aqueduct.software</p>
                                <p class="text-center md:text-left md:pl-4 text-slate-400">+46 72 170 26 14</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
