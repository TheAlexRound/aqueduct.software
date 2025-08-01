<x-layout>

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
            <div class="pt-32 pb-10 md:pt-40">

                <!-- Hero content -->
                <div class="text-center">
                    <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">The folks behind the product</div>
                    <h1 class="h1 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-6">Turning security into innovation</h1>
                    <!-- Rings illustration -->
                    <div class="inline-flex items-center justify-center relative">
                        <!-- Particles animation -->
                        <div class="absolute inset-0 -z-10" aria-hidden="true">
                            <canvas data-particle-animation data-particle-quantity="10"></canvas>
                        </div>
                        <div class="inline-flex [mask-image:_radial-gradient(circle_at_bottom,transparent_15%,black_70%)]">
                            <img src="{{ url('frontend/images/about-illustration.svg') }}" width="446" height="446" alt="About illustration" />
                        </div>
                        <img class="absolute mt-[30%] drop-shadow-lg animate-float" src="{{ url('frontend/images/about-icon.svg') }}" width="72" height="72" alt="About icon" />
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Story -->
    <section class="relative">

        <!-- Blurred shape -->
        <div class="absolute top-0 -mt-32 left-1/2 -translate-x-1/2 ml-10 blur-2xl opacity-70 pointer-events-none -z-10" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                <defs>
                    <linearGradient id="bs4-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                        <stop offset="0%" stop-color="#A855F7"></stop>
                        <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
                <path fill="url(#bs4-a)" fill-rule="evenodd" d="m0 0 461 369-284 58z" transform="matrix(1 0 0 -1 0 427)"></path>
            </svg>
        </div>

        <div class="px-4 sm:px-6">
            <div class="max-w-5xl mx-auto">
                <div class="pb-12 md:pb-20">

                    <!-- Section header -->
                    <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                        <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60">Our story (so far)</h2>
                    </div>

                    <div class="md:flex justify-between space-x-6 md:space-x-8 lg:space-x-14">
                        <figure class="min-w-[240px]">
                            <img class="sticky top-8 mx-auto mb-12 md:mb-0 rounded-lg -rotate-[4deg]" src="{{ url('frontend/images/team.jpg') }}" width="420" height="280" alt="Team" />
                        </figure>
                        <div class="max-w-[548px] mx-auto">
                            <div class="text-slate-400 space-y-6">
                                <p>
                                    We came together over a shared excitement about building a product that could solve our own problem of where our next favourite hack is coming from. But also a product that helps everyone thrive in this market: from founders and engineers to companies and investors.
                                </p>
                                <p>
                                    Stellar is a product that connects people around the topics and ideas that fascinate them. <strong class="text-slate-50 font-medium">The idea that we can use technology to take our experience</strong>, as security lovers, to a new dimension and leave the computer industry in better shape while we're at it.
                                </p>
                                <p>
                                    You can dive into the atoms that make up a product, share the moments that move you and discuss the ideas you find compelling. We want to create a ground for <strong class="text-slate-50 font-medium">discussion and bring knowledge together</strong>, while making it more accessible and easier to grasp.
                                </p>
                                <p>
                                    Contrary to popular belief, this product is not random security. It has roots in a piece of classical literature, making it over 5 years old. Richard McClintock, a professor at <a class="text-purple-500 font-medium hover:underline" href="#0">Hampden-Sydney College</a> in Virginia, looked up one of the more obscure words, consectetur from a passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                                </p>
                                <p>
                                    We all thrive on learning something new every day and everyone is constantly trying on different hats. We are working with new technologies while rethinking an old industry and are excited about all the possibilities and opportunities to innovate.
                                    It's a problem deeply ingrained in traditional sectors like startups and the wider service industry but which has been compounded in the past five to ten years by the emergence of the mostly tech-powered gig economy which has created a new generation of shift workers and indeed
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
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
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">We are a happy, small team</h2>
                    <p class="text-lg text-slate-400">Various versions of Lorem Ipsum have evolved over the years, sometimes by accident, sometimes on purpose, and by injecting humour and the like.</p>
                </div>
                <!-- Team members -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2 sm:gap-6">
                    <!-- Member #01 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-01.png') }}" width="48" height="48" alt="Team 01" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Sarah Barnekow</div>
                                <div class="text-sm text-purple-500 font-medium">CEO & Co-founder</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #02 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-02.png') }}" width="48" height="48" alt="Team 02" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Alex Suevalov</div>
                                <div class="text-sm text-purple-500 font-medium">Tech Lead</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #03 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-03.png') }}" width="48" height="48" alt="Team 03" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Mark Lamprecht</div>
                                <div class="text-sm text-purple-500 font-medium">Software Engineer</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #04 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-04.png') }}" width="48" height="48" alt="Team 04" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Scott Bailey</div>
                                <div class="text-sm text-purple-500 font-medium">Software Engineer</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #05 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-05.png') }}" width="48" height="48" alt="Team 05" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Vedant Hegde</div>
                                <div class="text-sm text-purple-500 font-medium">Customer Experience</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #06 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-06.png') }}" width="48" height="48" alt="Team 06" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Lucy Radux</div>
                                <div class="text-sm text-purple-500 font-medium">Marketing Manager</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #07 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-07.png') }}" width="48" height="48" alt="Team 07" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Devani Janssen</div>
                                <div class="text-sm text-purple-500 font-medium">Product Design</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #08 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-08.png') }}" width="48" height="48" alt="Team 08" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Dima Trystram</div>
                                <div class="text-sm text-purple-500 font-medium">Customer Success</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #09 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-09.png') }}" width="48" height="48" alt="Team 09" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Fraser Davidson</div>
                                <div class="text-sm text-purple-500 font-medium">Customer Success</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #10 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-10.png') }}" width="48" height="48" alt="Team 10" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">William Adkins</div>
                                <div class="text-sm text-purple-500 font-medium">Customer Experience</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #11 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-11.png') }}" width="48" height="48" alt="Team 11" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Debbie Poulin</div>
                                <div class="text-sm text-purple-500 font-medium">Head of Talent</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #12 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-12.png') }}" width="48" height="48" alt="Team 12" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">James Kudinov</div>
                                <div class="text-sm text-purple-500 font-medium">Product Design</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #13 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-13.png') }}" width="48" height="48" alt="Team 13" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Zhenya Rynzhuk</div>
                                <div class="text-sm text-purple-500 font-medium">Software Engineer</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #14 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-14.png') }}" width="48" height="48" alt="Team 14" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Mary Maka</div>
                                <div class="text-sm text-purple-500 font-medium">Enterprise Architect</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #15 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-15.png') }}" width="48" height="48" alt="Team 15" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Monty Hayton</div>
                                <div class="text-sm text-purple-500 font-medium">Video Producer</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #16 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-16.png') }}" width="48" height="48" alt="Team 16" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Srdjan Vidakovic</div>
                                <div class="text-sm text-purple-500 font-medium">Operations Manager</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #17 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-17.png') }}" width="48" height="48" alt="Team 17" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">David Cran</div>
                                <div class="text-sm text-purple-500 font-medium">Financial Analyst</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #18 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-18.png') }}" width="48" height="48" alt="Team 18" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Jacek Janiczak</div>
                                <div class="text-sm text-purple-500 font-medium">Data Engineer</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #19 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-19.png') }}" width="48" height="48" alt="Team 19" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Tommy Chandra</div>
                                <div class="text-sm text-purple-500 font-medium">Head of Design</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Member #20 -->
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <img class="shrink-0" src="{{ url('frontend/images/team-20.png') }}" width="48" height="48" alt="Team 20" />
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5">Ally Golovko</div>
                                <div class="text-sm text-purple-500 font-medium">Software Engineer</div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Twitter">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recruitment -->
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
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Join a team of makers</h2>
                    <p class="text-lg text-slate-400">We are makers at heart. Problem solvers and storytellers. We are a diverse team of individuals who build things to make our customers happy.</p>
                </div>

                <!-- Icons with text -->
                <div class="grid md:grid-cols-3 gap-6 lg:gap-10 max-w-xs mx-auto md:max-w-none -m-5">
                    <!-- Block #1 -->
                    <div class="text-center p-5">
                        <div class="inline-flex items-center justify-center h-12 w-12 rounded-full border border-transparent [background:linear-gradient(var(--color-slate-800),var(--color-slate-800))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24">
                                <g fill="none" fill-rule="nonzero" opacity=".8">
                                    <path class="fill-slate-600" d="M14.416 3.527C13.841 4.39 13.5 5.242 13.5 6a1.5 1.5 0 1 0 3 0c0-.758-.34-1.61-.916-2.473A8.962 8.962 0 0 0 15 2.748c-.2.239-.398.5-.584.78ZM17.5 6a2.5 2.5 0 1 1-5 0c0-.992.41-2.015 1.084-3.027a9.979 9.979 0 0 1 1.062-1.327L15 1.293l.354.353a9.979 9.979 0 0 1 1.062 1.326C17.091 3.986 17.5 5.009 17.5 6ZM6 6.5c-1.374 0-2.5-1.055-2.5-2.375 0-.243.043-.492.125-.746.176-.548.523-1.108.99-1.672A9.774 9.774 0 0 1 5.677.62L6 .344l.323.275a9.774 9.774 0 0 1 1.061 1.089c.468.563.815 1.123.991 1.671.082.254.125.503.125.746C8.5 5.445 7.374 6.5 6 6.5Zm-.615-4.154c-.393.474-.678.933-.808 1.339-.051.16-.077.307-.077.44C4.5 4.877 5.164 5.5 6 5.5s1.5-.623 1.5-1.375c0-.133-.026-.28-.077-.44-.13-.406-.415-.865-.808-1.34A8.746 8.746 0 0 0 6 1.682c-.21.205-.42.43-.615.665Z" />
                                    <path class="fill-slate-200" d="M9.483 14.562A6.495 6.495 0 0 1 15 11.5h4.5v.5a8.5 8.5 0 0 1-8.5 8.5H9.5v3h-1v-7H7A6.5 6.5 0 0 1 .5 10v-.5H4c2.89 0 5.26 2.23 5.483 5.062Zm-.485.938H8.5v1h.174a6.45 6.45 0 0 1 .324-1Zm.502 4H11a7.5 7.5 0 0 0 7.484-7H15A5.5 5.5 0 0 0 9.5 18v1.5Zm-1-4V15A4.5 4.5 0 0 0 4 10.5H1.522A5.5 5.5 0 0 0 7 15.5h1.5Z" />
                                </g>
                            </svg>
                        </div>
                        <div class="font-bold text-slate-100 mb-1">Passionate</div>
                        <p class="text-sm text-slate-400">You are passionate about digital products of any kind and are a builder at heart.</p>
                    </div>
                    <!-- Block #2 -->
                    <div class="text-center p-5">
                        <div class="inline-flex items-center justify-center h-12 w-12 rounded-full border border-transparent [background:linear-gradient(var(--color-slate-800),var(--color-slate-800))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                <path class="fill-slate-200" d="M9.423 12.278H.87L11.614.458l-1.037 7.264h8.553L8.386 19.542l1.037-7.264Zm-6.293-1h7.447l-.74 5.18 7.033-7.736H9.423l.74-5.18-7.033 7.736Z" opacity=".8" />
                            </svg>
                        </div>
                        <div class="font-bold text-slate-100 mb-1">Energetic</div>
                        <p class="text-sm text-slate-400">You are passionate about digital products of any kind and are a builder at heart.</p>
                    </div>
                    <!-- Block #3 -->
                    <div class="text-center p-5">
                        <div class="inline-flex items-center justify-center h-12 w-12 rounded-full border border-transparent [background:linear-gradient(var(--color-slate-800),var(--color-slate-800))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <g fill="none" fill-rule="nonzero" opacity=".8">
                                    <path class="fill-slate-600" d="M11.5 1h1v4h-1V1ZM23 11.5v1h-4v-1h4ZM12.5 23h-1v-4h1v4ZM1 12.5v-1h4v1H1Z" />
                                    <path class="fill-slate-200" d="M12 23.5C5.649 23.5.5 18.351.5 12S5.649.5 12 .5 23.5 5.649 23.5 12 18.351 23.5 12 23.5Zm0-1c5.799 0 10.5-4.701 10.5-10.5S17.799 1.5 12 1.5 1.5 6.201 1.5 12 6.201 22.5 12 22.5Zm0-8a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Zm0-1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
                                </g>
                            </svg>
                        </div>
                        <div class="font-bold text-slate-100 mb-1">Achiever</div>
                        <p class="text-sm text-slate-400">You are passionate about digital products of any kind and are a builder at heart.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Images -->
        <div class="max-w-[1440px] mx-auto px-4 md:px-0">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 lg:gap-6 md:-mx-5">
                <img class="w-full aspect-16/10 object-cover rounded-lg" src="{{ url('frontend/images/recruitment-01.jpg') }}" width="352" height="220" alt="Recruitment 01" />
                <img class="w-full aspect-16/10 object-cover rounded-lg" src="{{ url('frontend/images/recruitment-02.jpg') }}" width="352" height="220" alt="Recruitment 02" />
                <img class="w-full aspect-16/10 object-cover rounded-lg" src="{{ url('frontend/images/recruitment-03.jpg') }}" width="352" height="220" alt="Recruitment 03" />
                <img class="w-full aspect-16/10 object-cover rounded-lg" src="{{ url('frontend/images/recruitment-04.jpg') }}" width="352" height="220" alt="Recruitment 04" />
            </div>
        </div>

        <!-- Positions -->
        <div class="relative px-4 sm:px-6">

            <!-- Blurred shape -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 translate-y-1/3 ml-24 blur-2xl opacity-40 pointer-events-none" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                    <defs>
                        <linearGradient id="bs2-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                            <stop offset="0%" stop-color="#6366F1"></stop>
                            <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
                        </linearGradient>
                    </defs>
                    <path fill="url(#bs2-a)" fill-rule="evenodd" d="m346 898 461 369-284 58z" transform="translate(-346 -898)"></path>
                </svg>
            </div>

            <div class="max-w-3xl mx-auto py-12 md:py-20">
                <h3 class="h3 inline-flex bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-8 md:pb-16">Open positions</h3>
                <div class="space-y-8">
                    <!-- Engineering -->
                    <div>
                        <h4 class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Engineering</h4>
                        <ul class="divide-y divide-slate-800">
                            <li class="flex flex-col md:flex-row flex-wrap justify-between py-5">
                                <span class="font-medium text-slate-50 mr-2">Software Engineering Intern</span>
                                <a class="inline-flex text-sm font-medium text-purple-500 group" href="#0">Remote / North America <span class="tracking-normal group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span></a>
                            </li>
                            <li class="flex flex-col md:flex-row flex-wrap justify-between py-5">
                                <span class="font-medium text-slate-50 mr-2">Software Engineer, Core Infrastructure</span>
                                <a class="inline-flex text-sm font-medium text-purple-500 group" href="#0">Remote <span class="tracking-normal group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span></a>
                            </li>
                            <li class="flex flex-col md:flex-row flex-wrap justify-between py-5">
                                <span class="font-medium text-slate-50 mr-2">Software Engineer, Data Platform</span>
                                <a class="inline-flex text-sm font-medium text-purple-500 group" href="#0">Remote / Europe <span class="tracking-normal group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span></a>
                            </li>
                            <li class="flex flex-col md:flex-row flex-wrap justify-between py-5">
                                <span class="font-medium text-slate-50 mr-2">Software Engineer, Marketing Systems</span>
                                <a class="inline-flex text-sm font-medium text-purple-500 group" href="#0">Remote / North America <span class="tracking-normal group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Marketing -->
                    <div>
                        <h4 class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Marketing</h4>
                        <ul class="divide-y divide-slate-800">
                            <li class="flex flex-col md:flex-row flex-wrap justify-between py-5">
                                <span class="font-medium text-slate-50 mr-2">Product Marketing Manager</span>
                                <a class="inline-flex text-sm font-medium text-purple-500 group" href="#0">Remote / North America <span class="tracking-normal group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span></a>
                            </li>
                            <li class="flex flex-col md:flex-row flex-wrap justify-between py-5">
                                <span class="font-medium text-slate-50 mr-2">Marketing Manager</span>
                                <a class="inline-flex text-sm font-medium text-purple-500 group" href="#0">Remote / Europe <span class="tracking-normal group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Design -->
                    <div>
                        <h4 class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Design</h4>
                        <ul class="divide-y divide-slate-800">
                            <li class="flex flex-col md:flex-row flex-wrap justify-between py-5">
                                <span class="font-medium text-slate-50 mr-2">Product Designer, Consumer</span>
                                <a class="inline-flex text-sm font-medium text-purple-500 group" href="#0">Remote / North America <span class="tracking-normal group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span></a>
                            </li>
                            <li class="flex flex-col md:flex-row flex-wrap justify-between py-5">
                                <span class="font-medium text-slate-50 mr-2">Senior Product Designer</span>
                                <a class="inline-flex text-sm font-medium text-purple-500 group" href="#0">Remote / Europe <span class="tracking-normal group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span></a>
                            </li>
                            <li class="flex flex-col md:flex-row flex-wrap justify-between py-5">
                                <span class="font-medium text-slate-50 mr-2">Lead Designer</span>
                                <a class="inline-flex text-sm font-medium text-purple-500 group" href="#0">Remote / Europe <span class="tracking-normal group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Testimonials -->
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
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Hear from our people</h2>
                    <p class="text-lg text-slate-400">Our company is comprised of people who make bold choices for our clients and the security sector. It's in our DNA to push our limits and make bold changes.</p>
                </div>
                <!-- Grid -->
                <div class="grid lg:grid-cols-3 gap-4 sm:gap-6 max-w-xs mx-auto lg:max-w-none">
                    <!-- Testimonial #01 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0" src="{{ url('frontend/images/testimonial-01.png') }}" width="44" height="44" alt="Testimonial 01" />
                                <div class="grow">
                                    <div class="font-bold text-slate-100">Mary Janiczak</div>
                                    <div class="text-sm text-purple-500 font-medium">Data Engineer</div>
                                </div>
                            </div>
                            <a class="shrink-0 text-slate-500" href="#0" aria-label="Member's Twitter">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                    <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                                </svg>
                            </a>
                        </div>
                        <p class="text-sm text-slate-400">“The pace of change and velocity of the product force you to pick up new skills, experiment with new tactics, and walk in a variety of users' shoes.”</p>
                    </div>
                    <!-- Testimonial #02 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0" src="{{ url('frontend/images/testimonial-02.png') }}" width="44" height="44" alt="Testimonial 02" />
                                <div class="grow">
                                    <div class="font-bold text-slate-100">Jack Smith</div>
                                    <div class="text-sm text-purple-500 font-medium">Software Engineer</div>
                                </div>
                            </div>
                            <a class="shrink-0 text-slate-500" href="#0" aria-label="Member's Twitter">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                    <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                                </svg>
                            </a>
                        </div>
                        <p class="text-sm text-slate-400">“The pace of change and velocity of the product force you to pick up new skills, experiment with new tactics, and walk in a variety of users' shoes.”</p>
                    </div>
                    <!-- Testimonial #03 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0" src="{{ url('frontend/images/testimonial-03.png') }}" width="44" height="44" alt="Testimonial 03" />
                                <div class="grow">
                                    <div class="font-bold text-slate-100">Anna Johnson</div>
                                    <div class="text-sm text-purple-500 font-medium">Product Designer</div>
                                </div>
                            </div>
                            <a class="shrink-0 text-slate-500" href="#0" aria-label="Member's Twitter">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                    <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                            </a>
                        </div>
                        <p class="text-sm text-slate-400">“The pace of change and velocity of the product force you to pick up new skills, experiment with new tactics, and walk in a variety of users' shoes.”</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="relative">

        <!-- Particles animation -->
        <div class="absolute left-1/2 -translate-x-1/2 top-0 -z-10 w-80 h-80 -mt-24">
            <div class="absolute inset-0 -z-10" aria-hidden="true">
                <canvas data-particle-animation data-particle-quantity="6" data-particle-staticity="30"></canvas>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="relative px-8 py-12 md:py-20 border-t border-b [border-image:linear-gradient(to_right,transparent,var(--color-slate-800),transparent)1]">
                <!-- Blurred shape -->
                <div class="absolute top-0 -mt-24 left-1/2 -translate-x-1/2 ml-24 blur-2xl opacity-70 pointer-events-none -z-10" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                        <defs>
                            <linearGradient id="bs4-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                <stop offset="0%" stop-color="#A855F7"></stop>
                                <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="url(#bs4-a)" fill-rule="evenodd" d="m0 0 461 369-284 58z" transform="matrix(1 0 0 -1 0 427)"></path>
                    </svg>
                </div>
                <!-- Content -->
                <div class="max-w-3xl mx-auto text-center">
                    <div>
                        <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">The security first platform</div>
                    </div>
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Supercharge your security</h2>
                    <p class="text-lg text-slate-400 mb-8">All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                    <div>
                        <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white transition duration-150 ease-in-out group" href="#0">
                            Start Building <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
