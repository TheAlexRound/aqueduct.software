<x-layout>>

    <!-- Hero -->
    <section class="relative">

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
            <img src="{{ url('frontend/images/page-illustration.svg') }}" class="max-w-none" width="1440" height="427" alt="Page Illustration">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-20 md:pt-40 md:pb-24">

                <!-- Section header -->
                <div class="text-center pb-12 md:pb-20">
                    <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">The security first platform</div>
                    <h1 class="h1 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Simple plans for everyone</h1>
                    <div class="max-w-3xl mx-auto">
                        <p class="text-lg text-slate-400">Cut down overhead costs and ditch clunky software. Get a flexible, purpose-built tool to simplify your security with authentication services.</p>
                    </div>
                </div>

                <!-- Pricing tabs -->
                <div class="relative">
                    <!-- Blurred shape -->
                    <div class="max-md:hidden absolute bottom-0 -mb-20 left-2/3 -translate-x-1/2 blur-2xl opacity-70 pointer-events-none" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                            <defs>
                                <linearGradient id="bs5-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                    <stop offset="0%" stop-color="#A855F7" />
                                    <stop offset="100%" stop-color="#6366F1" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                            <path fill="url(#bs5-a)" fill-rule="evenodd" d="m661 736 461 369-284 58z" transform="matrix(1 0 0 -1 -661 1163)" />
                        </svg>
                    </div>
                    <!-- Content -->
                    <div class="grid md:grid-cols-4 xl:-mx-6 text-sm [&>div:nth-of-type(-n+4)]:py-6 [&>div:nth-last-of-type(-n+4)]:pb-6 max-md:[&>div:nth-last-of-type(-n+4)]:mb-8 max-md:[&>div:nth-of-type(-n+4):nth-of-type(n+1)]:rounded-t-3xl max-md:[&>div:nth-last-of-type(-n+4)]:rounded-b-3xl md:[&>div:nth-of-type(2)]:rounded-tl-3xl md:[&>div:nth-of-type(4)]:rounded-tr-3xl md:[&>div:nth-last-of-type(3)]:rounded-bl-3xl md:[&>div:nth-last-of-type(1)]:rounded-br-3xl [&>div]:bg-slate-700/20 [&>div:nth-of-type(4n+1)]:bg-transparent max-md:[&>div:nth-of-type(4n+5)]:hidden max-md:[&>div:nth-of-type(4n+2)]:order-1 max-md:[&>div:nth-of-type(4n+3)]:order-2 max-md:[&>div:nth-of-type(4n+4)]:order-3 max-md:md:[&>div:nth-of-type(n)]:mb-0 [&>div:nth-of-type(4n+3)]:relative [&>div:nth-of-type(4n+3)]:before:absolute [&>div:nth-of-type(4n+3)]:before:-inset-px [&>div:nth-of-type(4n+3)]:before:rounded-[inherit] [&>div:nth-of-type(4n+3)]:before:border-x-2 [&>div:nth-of-type(3)]:before:border-t-2 [&>div:nth-last-of-type(2)]:before:border-b-2 [&>div:nth-of-type(4n+3)]:before:border-purple-500 [&>div:nth-of-type(4n+3)]:before:-z-10 [&>div:nth-of-type(4n+3)]:before:pointer-events-none" x-data="{ annual: true }">
                        <!-- Pricing toggle -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="pb-5 md:border-b border-slate-800">
                                <!-- Toggle switch -->
                                <div class="max-md:text-center">
                                    <div class="inline-flex items-center whitespace-nowrap">
                                        <div class="text-sm text-slate-500 font-medium mr-2 md:max-lg:hidden">Monthly</div>
                                        <div class="relative">
                                            <input type="checkbox" id="toggle" class="peer sr-only" x-model="annual" />
                                            <label for="toggle" class="relative flex h-6 w-11 cursor-pointer items-center rounded-full bg-slate-400 px-0.5 outline-slate-400 transition-colors before:h-5 before:w-5 before:rounded-full before:bg-white before:shadow-xs before:transition-transform before:duration-150 peer-checked:bg-purple-500 peer-checked:before:translate-x-full peer-focus-visible:outline peer-focus-visible:outline-offset-2 peer-focus-visible:outline-gray-400 peer-focus-visible:peer-checked:outline-purple-500">
                                                <span class="sr-only">Pay Yearly</span>
                                            </label>
                                        </div>
                                        <div class="text-sm text-slate-500 font-medium ml-2">Yearly <span class="text-teal-500">(-20%)</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pro price -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="grow pb-4 mb-4 border-b border-slate-800">
                                <div class="text-base font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-0.5">Pro</div>
                                <div class="mb-1">
                                    <span class="text-lg font-medium text-slate-500">$</span><span class="text-3xl font-bold text-slate-50" x-text="annual ? '24' : '29'">24</span><span class="text-sm text-slate-600 font-medium">/mo</span>
                                </div>
                                <div class="text-slate-500">Everything at your fingertips.</div>
                            </div>
                            <div class="pb-4 border-b border-slate-800">
                                <a class="btn-sm text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="#0">
                                    Get Started <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                </a>
                            </div>
                        </div>
                        <!-- Team price -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="grow pb-4 mb-4 border-b border-slate-800">
                                <div class="text-base font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-0.5">Team</div>
                                <div class="mb-1">
                                    <span class="text-lg font-medium text-slate-500">$</span><span class="text-3xl font-bold text-slate-50" x-text="annual ? '49' : '54'">49</span><span class="text-sm text-slate-600 font-medium">/mo</span>
                                </div>
                                <div class="text-slate-500">Everything at your fingertips.</div>
                            </div>
                            <div class="pb-4 border-b border-slate-800">
                                <a class="btn-sm text-white bg-purple-500 hover:bg-purple-600 w-full transition duration-150 ease-in-out group" href="#0">
                                    Get Started <span class="tracking-normal text-purple-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                </a>
                            </div>
                        </div>
                        <!-- Enterprise price -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="grow pb-4 mb-4 border-b border-slate-800">
                                <div class="text-base font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-0.5">Enterprise</div>
                                <div class="mb-1">
                                    <span class="text-lg font-medium text-slate-500">$</span><span class="text-3xl font-bold text-slate-50" x-text="annual ? '79' : '85'">79</span><span class="text-sm text-slate-600 font-medium">/mo</span>
                                </div>
                                <div class="text-slate-500">Everything at your fingertips.</div>
                            </div>
                            <div class="pb-4 border-b border-slate-800">
                                <a class="btn-sm text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="#0">
                                    Get Started <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                </a>
                            </div>
                        </div>
                        <!-- # Usage -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4">Usage</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Usage</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Usage</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Usage</div>
                        </div>
                        <!-- Social Connections -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">Social Connections</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>100 <span class="md:hidden">Social Connections</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>250 <span class="md:hidden">Social Connections</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">Social Connections</span></span>
                            </div>
                        </div>
                        <!-- Custom Domains -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">Custom Domains</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>4 <span class="md:hidden">Custom Domains</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">Custom Domains</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">Custom Domains</span></span>
                            </div>
                        </div>
                        <!-- User Role Management -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">User Role Management</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">User Role Management</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">User Role Management</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">User Role Management</span></span>
                            </div>
                        </div>
                        <!-- External Databases -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">External Databases</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>1 <span class="md:hidden">External Databases</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>5 <span class="md:hidden">External Databases</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">External Databases</span></span>
                            </div>
                        </div>
                        <!-- # Features -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4">Features</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Features</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Features</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Features</div>
                        </div>
                        <!-- Custom Connection -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">Custom Connection</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Custom Connection</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Custom Connection</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Custom Connection</span></span>
                            </div>
                        </div>
                        <!-- Advanced Deployment Options -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">Advanced Deployment Options</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Advanced Deployment Options</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Advanced Deployment Options</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Advanced Deployment Options</span></span>
                            </div>
                        </div>
                        <!-- Extra Add-ons -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">Extra Add-ons</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Extra Add-ons</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Extra Add-ons</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Extra Add-ons</span></span>
                            </div>
                        </div>
                        <!-- Admin Roles -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">Admin Roles</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center border-b border-slate-800 py-2 text-slate-400 max-md:hidden">
                                <span><span class="md:hidden">Admin Roles</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center border-b border-slate-800 py-2 text-slate-400 max-md:hidden">
                                <span><span class="md:hidden">Admin Roles</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Admin Roles</span></span>
                            </div>
                        </div>
                        <!-- Deploy and Monitor -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">Deploy and Monitor</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center border-b border-slate-800 py-2 text-slate-400 max-md:hidden">
                                <span><span class="md:hidden">Deploy and Monitor</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center border-b border-slate-800 py-2 text-slate-400 max-md:hidden">
                                <span><span class="md:hidden">Deploy and Monitor</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Deploy and Monitor</span></span>
                            </div>
                        </div>
                        <!-- Enterprise Add-ons -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">Enterprise Add-ons</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center border-b border-slate-800 py-2 text-slate-400 max-md:hidden">
                                <span><span class="md:hidden">Enterprise Add-ons</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center border-b border-slate-800 py-2 text-slate-400 max-md:hidden">
                                <span><span class="md:hidden">Enterprise Add-ons</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Enterprise Add-ons</span></span>
                            </div>
                        </div>
                        <!-- # Support -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4">Support</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 hidden">Support</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Support</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Support</div>
                        </div>
                        <!-- Premium Support -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">Premium Support</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center border-b border-slate-800 py-2 text-slate-400 max-md:hidden">
                                <span><span class="md:hidden">Premium Support</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Premium Support</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span><span class="md:hidden">Premium Support</span></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Features -->
    <section class="relative">

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
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Stop overpaying for software</h2>
                    <p class="text-lg text-slate-400">There are many variations available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>

                <!-- Rings illustration -->
                <div class="text-center pb-8">
                    <div class="inline-flex items-center justify-center relative">
                        <!-- Particles animation -->
                        <div class="absolute inset-0 -z-10" aria-hidden="true">
                            <canvas data-particle-animation data-particle-quantity="10"></canvas>
                        </div>
                        <div class="inline-flex">
                            <img src="{{ url('frontend/images/pricing-illustration.svg') }}" width="334" height="334" alt="Features illustration" />
                        </div>
                        <img class="absolute -mt-[40%]" src="{{ url('frontend/images/pricing-illustration-top.svg') }}" width="396" height="328" alt="Features illustration top" aria-hidden="true" />
                        <div class="absolute w-[200%] flex items-center justify-center space-x-5">
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
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                <path class="fill-purple-500" fill-opacity=".24" d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0Z" />
                                <path class="fill-purple-400" fill-rule="nonzero" d="M13 6.586 14.414 8l-5.747 5.748-3.081-3.081L7 9.252l1.667 1.667z" />
                            </svg>
                            <p class="text-sm text-slate-400">
                                Purpose-built for company that requires more than a <strong class="text-slate-300 font-medium">simple plan</strong> with security infrastructure.
                            </p>
                        </div>
                    </div>
                    <!-- Card #2 -->
                    <div class="bg-linear-to-tr from-slate-800/50 to-slate-800/10 rounded-3xl border border-slate-800">
                        <div class="flex items-center space-x-4 p-4 h-full">
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                <path class="fill-purple-500" fill-opacity=".24" d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0Z" />
                                <path class="fill-purple-400" fill-rule="nonzero" d="M13 6.586 14.414 8l-5.747 5.748-3.081-3.081L7 9.252l1.667 1.667z" />
                            </svg>
                            <p class="text-sm text-slate-400">
                                AI-powered to <strong class="text-slate-300 font-medium">remove the burdens</strong> of tedious knowledge management and security tasks.
                            </p>
                        </div>
                    </div>
                    <!-- Card #3 -->
                    <div class="bg-linear-to-tr from-slate-800/50 to-slate-800/10 rounded-3xl border border-slate-800">
                        <div class="flex items-center space-x-4 p-4 h-full">
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                <path class="fill-purple-500" fill-opacity=".24" d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0Z" />
                                <path class="fill-purple-400" fill-rule="nonzero" d="M13 6.586 14.414 8l-5.747 5.748-3.081-3.081L7 9.252l1.667 1.667z" />
                            </svg>
                            <p class="text-sm text-slate-400">
                                There's no prioritized support in Stellar. You can use email or live chat and you will hear back in a <strong class="text-slate-300 font-medium">couple of hours</strong>.
                            </p>
                        </div>
                    </div>
                    <!-- Card #4 -->
                    <div class="bg-linear-to-tr from-slate-800/50 to-slate-800/10 rounded-3xl border border-slate-800">
                        <div class="flex items-center space-x-4 p-4 h-full">
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                <path class="fill-purple-500" fill-opacity=".24" d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0Z" />
                                <path class="fill-purple-400" fill-rule="nonzero" d="M13 6.586 14.414 8l-5.747 5.748-3.081-3.081L7 9.252l1.667 1.667z" />
                            </svg>
                            <p class="text-sm text-slate-400">
                                Comprehensive <strong class="text-slate-300 font-medium">developer docs</strong> and a centralized support center packed many resources.
                            </p>
                        </div>
                    </div>
                    <!-- Card #5 -->
                    <div class="bg-linear-to-tr from-slate-800/50 to-slate-800/10 rounded-3xl border border-slate-800">
                        <div class="flex items-center space-x-4 p-4 h-full">
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                <path class="fill-purple-500" fill-opacity=".24" d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0Z" />
                                <path class="fill-purple-400" fill-rule="nonzero" d="M13 6.586 14.414 8l-5.747 5.748-3.081-3.081L7 9.252l1.667 1.667z" />
                            </svg>
                            <p class="text-sm text-slate-400">
                                No upcharges—and we'd never upsell you to a higher plan or a <strong class="text-slate-300 font-medium">dedicated IP</strong> to improve deliverability.
                            </p>
                        </div>
                    </div>
                    <!-- Card #6 -->
                    <div class="bg-linear-to-tr from-slate-800/50 to-slate-800/10 rounded-3xl border border-slate-800">
                        <div class="flex items-center space-x-4 p-4 h-full">
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                <path class="fill-purple-500" fill-opacity=".24" d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0Z" />
                                <path class="fill-purple-400" fill-rule="nonzero" d="M13 6.586 14.414 8l-5.747 5.748-3.081-3.081L7 9.252l1.667 1.667z" />
                            </svg>
                            <p class="text-sm text-slate-400">
                                Tool training, dedicated resources, and <strong class="text-slate-300 font-medium">regular updates</strong> are available for both small and large teams.
                            </p>
                        </div>
                    </div>
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
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Meet our customers</h2>
                    <p class="text-lg text-slate-400">There are many variations available, but the majority have suffered, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
                <!-- Customers -->
                <div class="grid lg:grid-cols-3 gap-4 sm:gap-6 max-w-xs mx-auto lg:max-w-none">
                    <!-- Customer #01 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="./images/customer-01.jpg" width="44" height="44" alt="Customer 01" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Mike Smets</div>
                                    <a class="text-sm text-slate-500 hover:text-slate-300 font-medium truncate transition-colors" href="#0">@MikeSmets</a>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                    </div>
                    <!-- Customer #02 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="./images/customer-02.jpg" width="44" height="44" alt="Customer 02" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Mike Bryan</div>
                                    <a class="text-sm text-slate-500 hover:text-slate-300 font-medium truncate transition-colors" href="#0">@mike0point7 </a>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                    </div>
                    <!-- Customer #03 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="./images/customer-03.jpg" width="44" height="44" alt="Customer 03" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Liz Park</div>
                                    <a class="text-sm text-slate-500 hover:text-slate-300 font-medium truncate transition-colors" href="#0">@liz-park82</a>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                    </div>
                    <!-- Customer #04 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="./images/customer-04.jpg" width="44" height="44" alt="Customer 04" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Jessie Maison</div>
                                    <a class="text-sm text-slate-500 hover:text-slate-300 font-medium truncate transition-colors" href="#0">@jessiem9</a>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                    </div>
                    <!-- Customer #05 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="./images/customer-05.jpg" width="44" height="44" alt="Customer 05" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Devani Janssen</div>
                                    <a class="text-sm text-slate-500 hover:text-slate-300 font-medium truncate transition-colors" href="#0">@deva07p</a>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                    </div>
                    <!-- Customer #06 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="./images/customer-06.jpg" width="44" height="44" alt="Customer 06" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Mark Gerkules</div>
                                    <a class="text-sm text-slate-500 hover:text-slate-300 font-medium truncate transition-colors" href="#0">@mark-gerk</a>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                    </div>
                    <!-- Customer #07 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="./images/customer-07.jpg" width="44" height="44" alt="Customer 07" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Andrey Propenk</div>
                                    <a class="text-sm text-slate-500 hover:text-slate-300 font-medium truncate transition-colors" href="#0">@andrey-prok</a>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                    </div>
                    <!-- Customer #08 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="./images/customer-08.jpg" width="44" height="44" alt="Customer 08" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Jay Master</div>
                                    <a class="text-sm text-slate-500 hover:text-slate-300 font-medium truncate transition-colors" href="#0">@masterpro</a>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                    </div>
                    <!-- Customer #09 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="./images/customer-09.jpg" width="44" height="44" alt="Customer 09" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Steve Wolf</div>
                                    <a class="text-sm text-slate-500 hover:text-slate-300 font-medium truncate transition-colors" href="#0">@imsteve</a>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="relative">

        <!-- Blurred shape -->
        <div class="absolute top-0 -translate-y-1/3 left-1/2 -translate-x-1/2 ml-24 blur-2xl opacity-50 pointer-events-none -z-10" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                <defs>
                    <linearGradient id="bs3-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                        <stop offset="0%" stop-color="#6366F1" />
                        <stop offset="100%" stop-color="#6366F1" stop-opacity="0" />
                    </linearGradient>
                </defs>
                <path fill="url(#bs3-a)" fill-rule="evenodd" d="m410 0 461 369-284 58z" transform="matrix(1 0 0 -1 -410 427)" />
            </svg>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20 border-t [border-image:linear-gradient(to_right,transparent,var(--color-slate-800),transparent)1]">

                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <div>
                        <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Getting started with Stellar</div>
                    </div>
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Everything you need to know</h2>
                </div>

                <!-- Columns -->
                <div class="md:flex md:space-x-12 space-y-8 md:space-y-0">

                    <!-- Column -->
                    <div class="w-full md:w-1/2 space-y-8">

                        <!-- Item -->
                        <div class="space-y-2">
                            <h4 class="font-semibold">What is Stellar?</h4>
                            <p class="text-slate-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p>
                        </div>

                        <!-- Item -->
                        <div class="space-y-2">
                            <h4 class="font-semibold">What's an affordable alternative to Stellar?</h4>
                            <p class="text-slate-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p>
                        </div>

                        <!-- Item -->
                        <div class="space-y-2">
                            <h4 class="font-semibold">Can I remove the 'Powered by Stellar' branding?</h4>
                            <p class="text-slate-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p>
                        </div>

                    </div>

                    <!-- Column -->
                    <div class="w-full md:w-1/2 space-y-8">

                        <!-- Item -->
                        <div class="space-y-2">
                            <h4 class="font-semibold">What kind of data can I collect from my customers?</h4>
                            <p class="text-slate-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p>
                        </div>

                        <!-- Item -->
                        <div class="space-y-2">
                            <h4 class="font-semibold">Can I use Stellar for free?</h4>
                            <p class="text-slate-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p>
                        </div>

                        <!-- Item -->
                        <div class="space-y-2">
                            <h4 class="font-semibold">Is Stellar affordable for small businesses?</h4>
                            <p class="text-slate-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="relative px-8 py-12 md:py-20 rounded-[3rem] overflow-hidden">
                <!-- Radial gradient -->
                <div class="absolute flex items-center justify-center top-0 -translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/3 aspect-square" aria-hidden="true">
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
                <div class="max-w-3xl mx-auto text-center">
                    <div>
                        <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">The security first platform</div>
                    </div>
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Take control of your business</h2>
                    <p class="text-lg text-slate-400 mb-8">All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                    <div>
                        <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white transition duration-150 ease-in-out group" href="#0">
                            Get Started <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
